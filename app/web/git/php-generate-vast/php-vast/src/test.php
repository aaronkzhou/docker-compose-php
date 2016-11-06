<?php 

use Sokil\Vast\Document;
$document = Document::create('2.0');

// insert Ad section
$ad1 = $document->createInLineAdSection()
    ->setId('ad1')
    ->setAdSystem('Ad Server Name')
    ->setAdTitle('Ad Title')
    ->setImpression('http://ad.server.com/impression');

// create creative for ad section
$ad1->createLinearCreative()
    ->setDuration(128)
    ->setVideoClicksClickThrough('http://entertainmentserver.com/landing')
    ->addVideoClicksClickTracking('http://ad.server.com/videoclicks/clicktracking')
    ->addVideoClicksCustomClick('http://ad.server.com/videoclicks/customclick')
    ->addTrackingEvent('start', 'http://ad.server.com/trackingevent/start')
    ->addTrackingEvent('pause', 'http://ad.server.com/trackingevent/stop')
    ->createMediaFile()
        ->setProgressiveDelivery()
        ->setType('video/mp4')
        ->setHeight(100)
        ->setWidth(100)
        ->setUrl('http://server.com/media.mp4');

// get dom document
$domDocument = $document->toDomDocument();

// get XML string
echo $document;