-- Creating a Database --

CREATE DATABASE company;

-- Select the company database --

USE company;

-- Creating a Table -- 

CREATE TABLE Employees(
    -> EmployeeID INT PRIMARY KEY,
    -> FirstName VARCHAR(20),
    -> LastName VARCHAR(20),
    -> Age INT,
    -> Department VARCHAR(20)
    -> );

-- Insert 5 data into Table -- 

INSERT INTO Employees(EmployeeID, FirstName, LastName, Age, Department)
    -> VALUES (1, "John Carlo", "Diga", 21, "College"),
    -> (2, "Elmer", "Alvarado", 28, "College"),
    -> (3, "Sha", "Labung", 30, "College Coordinator"),
    -> (4, "Jireh", "Belen", 23, "College"),
    -> (5, "Desk", "Me", 99, "System");

-- Viewing Data -- 

SELECT * FROM Employees;

-- Updating Data -- 

UPDATE Employees
    -> SET Department = "Marketing"
    -> WHERE EmployeeID = 2;

-- Deleting Data -- 

DELETE FROM Employees
    -> WHERE EmployeeID = 3;

-- Dropping the Table -- 

DROP TABLE Employees;