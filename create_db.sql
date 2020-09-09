CREATE DATABASE ast;

use ast;

CREATE TABLE users
(
  `u_id`        INT           NOT NULL UNIQUE  AUTO_INCREMENT COMMENT '用户id',
  `u_name`      VARCHAR(20)   NOT NULL UNIQUE  COMMENT '用户名',
  `u_password`  VARCHAR(20)   NOT NULL         COMMENT '用户密码',
  PRIMARY KEY (u_id)
) ENGINE=InnoDB;

INSERT INTO users (u_name, u_password) VALUE 
('rogepi','118384');

CREATE TABLE contacts
(
  `id`        INT         NOT NULL UNIQUE  AUTO_INCREMENT COMMENT '通讯录id',
  `name`      VARCHAR(20) NOT NULL UNIQUE  COMMENT '姓名',
  `phone`     VARCHAR(20) NoT NULL         COMMENT '电话',
  `class`     VARCHAR(50) NULL             COMMENT '班级',
  `birth_m`   INT         NULL             COMMENT '生日月',
  `birth_d`   INT         NULL             COMMENT '生日天',
  `u_id`      INT         NOT NULL         COMMENT '所属用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE courses
(
  `id`    INT           NOT NULL  UNIQUE AUTO_INCREMENT COMMENT '课程id',
  `name`  VARCHAR(30)   NOT NULL    COMMENT  '课程名',
  `week`  VARCHAR(20)   NOT NULL    COMMENT  '星期',
  `num`   INT           NOT NULL  COMMENT '课序',
  `u_id`  INT           NOT NULL    COMMENT  '所属用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO courses (name, week, num, u_id) VALUE
('高等数学', '1', '1', '1'),
('Linux操作系统', '1', '2', '1'),
('数据结构', '1', '3', '1'),
('数据库原理与应用', '1', '4', '1'),
('企业职素', '2', '1', '1'),
('离散数学', '2', '2', '1'),
('数据结构', '2', '3', '1'),
('数据结构', '2', '4', '1'),
('高等数学', '3', '1', '1'),
('大学英语', '3', '2', '1'),
('数据结构', '3', '3', '1'),
('Linux操作系统', '3', '4', '1'),
('中国近现代史', '4', '1', '1'),
('数据库原理与应用', '4', '2', '1'),
('高等数学', '4', '3', '1'),
('数据库原理与应用', '4', '4', '1'),
('离散数学', '5', '1', '1'),
('大学英语', '5', '2', '1'),
('大学体育', '5', '3', '1'),
('C++程序设计', '5', '4', '1');


CREATE TABLE todos
(
  `id`    INT           NOT NULL  UNIQUE AUTO_INCREMENT COMMENT '便签id',
  `matter`  VARCHAR(50)   NOT NULL  UNIQUE  COMMENT  '便签',
  `finsh` INT           NOT NULL   COMMENT  '完成情况',
  `u_id`  INT           NOT NULL   COMMENT  '所属用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO contacts(name,phone,class,birth_m,birth_d,u_id) VALUE 
('小智','13344557788','计本3班',12,4,1),
('小明','15877663344','计本2班',10,24,1),
('小红','17899005566','计本4班',4,5,1),
('小蓝','13466887700','计本3班',5,25,1),
('小刚','15977558866','计本1班',4,15,1),
('小西','13588667722','计本6班',2,24,1);

INSERT INTO todos(matter,finsh,u_id) VALUE 
('健康卡打卡',0,1),
('数据库课程设计',0,1),
('高数大作业',0,1),
('linux实验报告',0,1),
('数据结构课程设计',1,1);