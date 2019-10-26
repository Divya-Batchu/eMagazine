# eMagazine                                            e-Magazine help
	
		To exceute registration page required database and table :
			1.create a database named emagzine
				1.1. table name user
					CREATE TABLE `user` (
						`id` int(11) NOT NULL AUTO_INCREMENT,
						`fullName` varchar(255) DEFAULT NULL,
						`address` longtext,
						`city` varchar(255) DEFAULT NULL,
						`gender` varchar(255) DEFAULT NULL,
						`email` varchar(255) DEFAULT NULL,
						`password` varchar(255) DEFAULT NULL,
						`regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
						`updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
						PRIMARY KEY (`id`)
						) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1
		
		To execute events page required database and table :
			1.create a database named charan
				1.1 table name pcevents list
					
						no of columns:5
						1.)Date  - Date
						2.)Event  - Varchar
						3.)Target - Varchar
						4.)Time   - Time
						5.)Venue   - Varchar
						
		To exceute events newsfeed page required database and table @
			In the database e-Magazine 
				1. create table name photos
				   
				    no.of columns 3
					
					1. location - varchar(100)
					2. postby   - varchar(100)
					3. content  - varchar(100)
					
** Firstly , start execution with registration page
