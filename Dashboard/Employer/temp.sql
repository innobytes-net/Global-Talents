INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email_id`, `password`, `reg_date`, `type`) VALUES ('21', 'John', 'Doe', 'abc@abc.com', '1234', current_timestamp(), 'hire');



DROP TABLE IF EXISTS `innoszdh_globaltalents`.`Employer` ;

CREATE TABLE IF NOT EXISTS `Employer` (
  `userid` INT NOT NULL,
  `company_name` VARCHAR(30) NOT NULL,
  `country` VARCHAR(20) NOT NULL,
  `city` VARCHAR(20) NOT NULL,
  `state` VARCHAR(20) NOT NULL,
  `website` VARCHAR(40) NOT NULL,
  `phone` BIGINT(20) NOT NULL,
  `payment_method` VARCHAR(30) NULL DEFAULT NULL,
  `profile_type` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`userid`),

  CONSTRAINT `fk_USERS_CO`
    FOREIGN KEY (`userid`)
    REFERENCES `users` (`userid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)

  
INSERT INTO `employer`
(`company_username`,
`company_name`,
`email_id`,
`country`,
`city`,
`state`,
`website`,
`phone`,
`payment_method`,
`profile_type`)
VALUES
(<{company_username: }>,
<{company_name: }>,
<{email_id: }>,
<{country: }>,
<{city: }>,
<{state: }>,
<{website: }>,
<{phone: }>,
<{payment_method: }>,
<{profile_type: }>);

CREATE TABLE `job_post` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `salary` int(10) NOT NULL,
  `contact_user` varchar(20) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  'date' timestamp NOT NULL,
  'applicant_count' int(11),
  'status'  varchar(5),
  PRIMARY KEY (`job_id`),
   CONSTRAINT `fk_JOB_CAT`
   FOREIGN KEY ('category_id') 
  REFERENCES 'category'('category_id')
   ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
        
        INSERT INTO `innoszdh_globaltalents`.`job_post`
(`job_id`,
`category_id`,
`company_name`,
`job_title`,
`job_description`,
`job_location`,
`salary`,
`contact_user`,
`contact_email`,
'date',
'applicant_count',
'status')
VALUES
(1,
1,
'Sachin Johnson',
 'asdasdas',
 'asdasda',
 'asdasdasd',
123,
'123123123',
'johnsonsach5@gmail.com',
 '2020-05-19 12:30:35',
1,`closed`),
(2,
1,
'Johnson',
 'zxczxczc',
 'zxczxc',
 'zxczxzxc',
123,
'123123123',
'jonsach5@gmail.com',
 '2020-05-21 12:30:35',
1,`open`);
;


CREATE TABLE `job_application` (
  `userid` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `application` varchar(255) NOT NULL,
  `country` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `expected_rate` int(11) NOT NULL,
  `minimum_budget` int(11) NOT NULL,
  `application_date` timestamp NOT NULL,
   PRIMARY KEY (`userid`),
  CONSTRAINT `fk_USERS_APPLN`
    FOREIGN KEY (`userid`)
    REFERENCES `users` (`userid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USERS_APPLN_ID`
    FOREIGN KEY (`job_id`)
    REFERENCES `job_post` (`job_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    
) 


CREATE TABLE `job_post_log` (
  `userid` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `regdate` timestamp NOT NULL,
   PRIMARY KEY (`userid`),
  CONSTRAINT `fk_USERS_APPLN`
    FOREIGN KEY (`userid`)
    REFERENCES `users` (`userid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USERS_APPLN_ID`
    FOREIGN KEY (`job_id`)
    REFERENCES `job_post` (`job_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    
) 
;
        INSERT INTO `job_post_log`
(`userid`,
`job_id`,
'regdate')
VALUES
(21,
1,
'2020-05-19 12:30:35'),
(21,2
 '2020-05-21 12:30:35')

INSERT INTO `job_application` (`userid`, `job_id`, `application`,'country','contact',`expected_rate`, `minimum_budget`, `application_date`) VALUES
(15,1, 'Sachin Johnson', '', 'johnsonsachin95@gmail.com',1,1, '2020-05-19 12:30:35'),
(19,2, 'Sachin', 'Chirayath', 'johnsonjustin95@gmail.com', 1,1, '2020-07-05 19:36:40',),
(20,1, 'JOHNSON', 'SDSD', 'johnson95@gmail.com',1,1, '2020-07-05 19:39:14'),
(21,2, 'John', 'Doe', 'abc@abc.com',1,1, '2020-07-16 15:21:47');
