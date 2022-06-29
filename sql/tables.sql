CREATE TABLE region (
regionID int NOT NULL,
regionName varchar(255) NOT NULL,
CONSTRAINT PK_R_regionID PRIMARY KEY (regionID)
);

CREATE TABLE UserDetails (
    UserId INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    DOB VARCHAR(10) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    UserPassword VARCHAR(255) NOT NULL,
)

CREATE TABLE UserProfileImg (

)

CREATE TABLE UserProfileStatus (
    
)