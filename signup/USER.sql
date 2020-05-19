
/*User table for Sign-up page*/

CREATE TABLE IF NOT EXISTS USERS(
    userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30),
    email_id VARCHAR(40) UNIQUE NOT NULL,
    password VARCHAR(30) NOT NULL,
    type varchar(5) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



/*
CREATE TABLE IF NOT EXISTS Employee(
    username VARCHAR(30) PRIMARY KEY,
    password VARCHAR(30) NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    middle_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email_id VARCHAR(40) UNIQUE NOT NULL,
    gender char(1) NOT NULL, 
    country VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    pincode INT NOT NULL,
    phone BIGINT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Education_details(
    username VARCHAR(30),
    degree_name VARCHAR(50),
    major VARCHAR(50),
    institute_name VARCHAR(30) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    PRIMARY KEY(username, degree_name, major),
    FOREIGN KEY (username) 
        REFERENCES Employee (username) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS skills(
    username VARCHAR(30),
    skill VARCHAR(30),
    PRIMARY KEY (username, skill),
    FOREIGN KEY (username)
        REFERENCES Employee(username) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS past_experience(
    username VARCHAR(30),
    title VARCHAR(30) NOT NULL,
    organization_name VARCHAR(30) NOT NULL,
    salary INT,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    PRIMARY KEY(username, title, organization_name),
    FOREIGN KEY (username) 
        REFERENCES Employee(username) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS Employer(
    company_username VARCHAR(30) PRIMARY KEY,
    company_name VARCHAR(30) NOT NULL,
    email_id VARCHAR(40) UNIQUE NOT NULL,
    country VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    website VARCHAR(40) NOT NULL,
    phone BIGINT NOT NULL,
    payment_method VARCHAR(30),
    profile_type VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS Job_Post(
    job_id INT AUTO_INCREMENT PRIMARY KEY,
    company_username VARCHAR(30) NOT NULL,
    project_name VARCHAR(20) NOT NULL,
    project_description VARCHAR(100) NOT NULL,
    skills_required VARCHAR(100) NOT NULL,
    FOREIGN KEY (company_username) 
        REFERENCES Employer(company_username) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS Job_Application(
    username VARCHAR(30),
    job_id INT,
    application VARCHAR(255) NOT NULL,
    expected_rate INT NOT NULL,
    minimum_budget INT NOT NULL,
    PRIMARY KEY (username, job_id),
    FOREIGN KEY (username) 
        REFERENCES Employee(username) 
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (job_id) 
        REFERENCES Job_Post(job_id) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

*/