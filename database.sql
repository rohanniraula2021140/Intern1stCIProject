DROP DATABASE IF EXISTS EMPLOYEE;
CREATE DATABASE EMPLOYEE;
USE EMPLOYEE;
create table employee
(
	employeeName  text null,
	employeeId    int  null,
	employeeEmail text null
);

INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Romelu Lukaku', 1, 'lukaku@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Lionel Messi', 2, 'messi@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Kevin De Bruyne', 3, 'kevin@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Robert Lewandowski', 4, 'robert@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Neymar', 5, 'neymar@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Jack Grealish', 6, 'jack@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Erling Haaland', 7, 'haaland@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Cristiano Ronaldo', 8, 'ronaldo@gmail.com');
INSERT INTO EMPLOYEE.employee (employeeName, employeeId, employeeEmail) VALUES ('Mohamed Salah', 9, 'salah@gmail.com');
