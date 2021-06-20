# DB 생성
DROP DATABASE IF EXISTS php_simple_blog_st;
CREATE DATABASE php_simple_blog_st;
USE php_simple_blog_st;

# 게시물 테이블 생성
CREATE TABLE article (
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    writerName CHAR(30) NOT NULL,
    title CHAR(200) NOT NULL,
    `body` LONGTEXT NOT NULL
);

# 게시물, 테스트 데이터 생성

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
writerName = '홍길동',
title = '자바스크립트 변수',
`body` = '
# 자바스크립트 변수 선언
```javascript
let a = 10;
let b = 20;
console.log(a + b); // 30
```
';


INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
writerName = '홍길동',
title = '자바스크립트 조건문',
`body` = '
# 자바스크립트 변수 선언
```javascript
let age = 20;
if ( age >= 20 ) {
  console.log("성인입니다.");
}
else {
  console.log("미성년입니다.");
}
```
';