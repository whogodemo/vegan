CREATE TABLE USERINFO (
    ID VARCHAR(100) not null,
    PASSWORD VARCHAR(100) not null,
    NAME VARCHAR(100) not null,
    TYPE VARCHAR(100),
    PRIMARY KEY(ID)
    );
	
INSERT INTO userinfo VALUES("anabel", "dkdld", "민주", "nonvegan");

SELECT * FROM `userinfo` WHERE id = "anabel";

CREATE TABLE HISTORY (
    SEARCH VARCHAR(100) not null,
    TIME DATE 
    );


alter table vegan add location_id VARCHAR(100);

CREATE TABLE VEGAN (
    ID INT(3) not null,
     NAME VARCHAR(27) not null,
     CATEGORY VARCHAR(5),
     TELEPHONE VARCHAR(14),
     DISTRICT VARCHAR(4) not null,
     ADDRESS VARCHAR(48) not null,
     MENU VARCHAR(735),
     PRIMARY KEY(ID)
);

LOAD DATA INFILE 'C:/xampp/htdocs/vegan.csv'  
INTO TABLE vegan 
FIELDS TERMINATED BY '!' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

SELECT * FROM vegan WHERE name like '%롯데리아%' or name like '%본죽%'; --삭제할 데이터 조회

BEGIN TRAN; --트랜잭션 시작
DELETE FROM vegan WHERE name like '%롯데리아%' or name like '%본죽%'; --데이터 삭제
SELECT * FROM vegan WHERE name like '%롯데리아%' or name like '%본죽%'; --삭제한 데이터 조회
COMMIT TRAN; -- 트랜잭션 반영


SET @CNT = 0;
UPDATE VEGAN SET VEGAN.id = @CNT := @CNT+1;

CREATE TABLE LOCATION (
    ID INT not null AUTO_INCREMENT,
    LOCATION_ID VARCHAR(100) not null,
    NAME VARCHAR(100) not null,
    PRIMARY KEY(ID)

    );

SELECT search, COUNT(search) FROM history 
GROUP BY search 
HAVING COUNT(search) > 1 
ORDER BY COUNT(search) DESC;
