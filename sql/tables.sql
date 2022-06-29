-- User details
CREATE TABLE Users (
    UserId INT NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    DOB VARCHAR(10) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    UserPassword VARCHAR(255) NOT NULL,
    CONSTRAINT PK_UD_UserId PRIMARY KEY (UserId)
)

CREATE TABLE UserDetails (
    UserId
)

CREATE TABLE UserProfileImg (
    UserId INT NOT NULL,
    Img VARCHAR(255) NOT NULL
)

CREATE TABLE UserProfileStatus (
    UserId INT NOT NULL,
    Status VARCHAR(10) NOT NULL
)

-- social media
CREATE TABLE UserSocialMedia (
    UserId INT NOT NULL,
    SocialId INT NOT NULL
)

CREATE TABLE SocialMedia{
    SocialId INT NOT NULL AUTO_INCREMENT,
    Media VARCHAR(10) NOT NULL,
    MediaUserName VARCHAR(255) NOT NULL
}