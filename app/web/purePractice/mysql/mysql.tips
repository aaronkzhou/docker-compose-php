1.Query the list of CITY names starting with vowels (a, e, i, o, u) from STATION. Your resultcannot contain duplicates.

select distinct(city) from station where upper(substr(city,1,1)) in ('A','E','I','O','U');

2.Query the two cities in STATION with the shortest and longest CITY names, as well as their respective lengths (i.e.: number of characters in the name). If there is more than one smallest or largest city, choose the one that comes first when ordered alphabetically.

SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY) LIMIT 1 ;
SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY) DESC LIMIT 1

3.Query the list of CITY names ending with vowels (a, e, i, o, u) from STATION. Your resultcannot contain duplicates.

SELECT DISTINCT CITY FROM STATION WHERE RIGHT (CITY, 1) IN ('a','e', 'i', 'o', 'u');

4.Query the Name of any student in STUDENTS who scored higher than 7575 Marks. Order your output by the last three characters of each name. If two or more students both have names ending in the same last three characters (i.e.: Bobby, Robby, etc.), secondary sort them by ascending ID.

SELECT NAME FROM STUDENTS WHERE MARKS>75 order by right(name,3), id

5.

Generate the following two result sets:
- Query an alphabetically ordered list of all names in OCCUPATIONS, immediately followed by the first letter of each profession as a parenthetical (i.e.: enclosed in parentheses). For example: AnActorName(A), ADoctorName(D), AProfessorName(P), andASingerName(S).
- Query the number of ocurrences of each occupation in OCCUPATIONS. Sort the occurrences in ascending order, and output them in the following format:
-
There are total [occupation_count] [occupation]s.



- where [occupation_count] is the number of occurrences of an occupation inOCCUPATIONS and [occupation] is the lowercase occupation name. If more than oneOccupation has the same [occupation_count], they should be ordered alphabetically.

Note: There will be at least two entries in the table for each type of occupation.

Ashely(P)
Christeen(P)
Jane(A)
Jenny(D)
Julia(A)
Ketty(P)
Maria(A)
Meera(S)
Priya(S)
Samantha(D)
There are total 2 doctors.
There are total 2 singers.
There are total 3 actors.
There are total 3 professors.

select concat(name,'(',left(occupation,1),')') as name
from occupations
order by name;
select concat('There are total ',count(occupation),' ',lower(occupation),'s.') as total
from occupations
group by occupation
order by total;

6.Query the average population for all cities in CITY, rounded down to the nearest integer.
select floor(avg(population))  from CITY


7. Given the CITY and COUNTRY tables, query the names of all the continents (COUNTRY.Continent) and their respective average city populations (CITY.Population) rounded down to the nearest integer.

Note: CITY.CountryCode and COUNTRY.Code are matching key columns. Do not include continents without cities in your output.


select country.continent, floor(avg(city.population)) from city inner join country on CITY.CountryCode = COUNTRY.Code group by country.continent;

8.
Ketty gives Eve a task to generate a report containing three columns:  Name, Grade and Mark. Ketty doesn't want the NAMES of those students who received a grade lower than 8. The report must be in descending order by grade -- i.e. higher grades are entered first. If there is more than one student with the same grade (1-10) assigned to them, order those particular students by their name alphabetically. Finally, if the grade is lower than 8, use "NULL" as their name and list them by their marks in ascending order.

Write a query to help Eve.

select 
case when Grades.grade < 8 then 'NULL' 
else 
Students.Name end, Grades.grade, Students.Marks from Students inner join Grades on Students.Marks >= Grades.Min_Mark and Students.Marks <= Grades.Max_Mark 
order by Grades.grade desc, Students.Name asc, Students.Marks DESC


insert into table(column1, column2, column3,column4)
values('value1','value2','value3','value4')