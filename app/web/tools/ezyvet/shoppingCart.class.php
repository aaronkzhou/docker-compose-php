<?php
/**
 * Cart Class
 *
 **/
class ShoppingCart {

	private $sessionName = '';
	private $cookie = false;//use cookie is you like, we are using session right now
	private $items = array();
	private $itemLimit=0;
	private $attributes = array();
	private $errors = array();

	/**
	 * Initialize shopping cart
	 *
	 * @param string $sessionName An unique ID for shopping cart session
	 * @param boolean $cookie Store cart items in cookie
	 */
	public function __construct($sessionName = '', $cookie = false) {
		if(!session_id()){
			session_start();
		}
		$this->sessionName = (!empty($sessionName)) ? $sessionName : str_replace('.', '_', ((isset($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : '')) . '_cart';
		$this->cookie = ($cookie) ? true : false;
		$this->read();
	}
	/**
	 * Get errors
	 *
	 * @return array An array of errors occured
	 */
	public function getErrors() {
		return end($this->errors);
	}

	/**
	 * write session
	 */
	private function write() {
		$_SESSION[$this->sessionName] = '';
		foreach($this->items as $name => $qty) {
			if(!$name){
				continue;
			}
			$_SESSION[$this->sessionName] .= $name . ',' . $qty . ';';
		}
		$_SESSION[$this->sessionName . '_attributes'] = '';
		foreach($this->attributes as $name => $attributes) {
			if(!$name)
				continue;
			foreach($attributes as $key => $value)
			$_SESSION[$this->sessionName . '_attributes'] .= $name . ',' . $key . ',' . $value . ';';
		}
		$_SESSION[$this->sessionName] = rtrim($_SESSION[$this->sessionName], ';');
		$_SESSION[$this->sessionName . '_attributes'] = rtrim($_SESSION[$this->sessionName . '_attributes'], ';');
		if($this->cookie) {
			setcookie($this->sessionName, $_SESSION[$this->sessionName], time() + 86400);
			setcookie($this->sessionName . '_attributes', $_SESSION[$this->sessionName . '_attributes'], time() + 86400);
		}
	}
	/**
	 * Check if a string is integer
	 *
	 */
	private function isInteger($int) {
		return preg_match('/^[0-9]+$/', $int);
	}
	/**
	 * Read session
	 *
	 */
	private function read() {
		$listItem = ($this->cookie && isset($_COOKIE[$this->sessionName])) ? $_COOKIE[$this->sessionName] : (isset($_SESSION[$this->sessionName]) ? $_SESSION[$this->sessionName] : '');
		$listAttribute = (isset($_SESSION[$this->sessionName . '_attributes'])) ? $_SESSION[$this->sessionName . '_attributes'] : (($this->cookie && isset($_COOKIE[$this->sessionName . '_attributes'])) ? $_COOKIE[$this->sessionName . '_attributes'] : '');
		$items = explode(';', $listItem);
		foreach($items as $item) {
			if(!$item || !strpos($item, ','))
				continue;
			list($name, $qty) = explode(',', $item);
			$this->items[$name] = $qty;
		}
		$attributes = explode(';', $listAttribute);
		foreach($attributes as $attribute) {
			if(!strpos($attribute, ','))
				continue;
			list($name, $key, $value) = explode(',', $attribute);
			$this->attributes[$name][$key] = $value;
		}
	}
	/**
	 * Get list of items in cart
	 *
	 * @return array An array of items in the cart
	 */
	public function getItems() {
		return $this->items;
	}
	/**
	 * Set the maximum of item accepted in cart
	 *
	 * @param integer $limit Item limit
	 *
	 * @return boolean Result as true/false
	 */
	public function setItemLimit($limit) {
		if(!$this->isInteger($limit)) {
			$this->errors[] = 'Cart::setItemLimit($limit): $limit must be integer.';
			return false;
		}
		$this->itemLimit = $limit;
		return true;
	}
	/**
	 * Add an item to cart
	 *
	 * @param integer $name An unique ID for the item
	 * @param integer $qty Quantity of item
	 *
	 * @return boolean Result as true/false
	 */
	public function add($name, $qty = 1) {
		if(!$this->isInteger($qty)) {
			$this->errors[] = 'Cart::add($qty): $qty must be integer.';
			return false;
		}
		if($this->itemLimit > 0 && count($this->items) >= $this->itemLimit)
			$this->clear();
		$this->items[$name] = (isset($this->items[$name])) ? ($this->items[$name] + $qty) : $qty;
		$this->write();
		return true;
	}
	/**
	 * Remove item from cart
	 *
	 * @param string $name ID of targeted item
	 */
	public function remove($name) {
		unset($this->items[$name]);
		unset($this->attributes[$name]);
		$this->write();
	}
	/**
	 * Clear items
	 */
	public function clear() {
		$this->items = array();
		$this->attributes = array();
		$this->write();
	}
	/**
	 * destroy session
	 */
	public function destroy() {
		unset($_SESSION[$this->sessionName]);
		if($this->cookie){
			setcookie($this->sessionName, '', time()-86400);
		}
		$this->items = array();
		$this->attributes = array();
	}

}
?>