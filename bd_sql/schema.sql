
CREATE TABLE `users` ( 	
	`idUser`		INT	AUTO_INCREMENT,
    `year`      	VARCHAR(5),
	`document_id`	VARCHAR(60),
    `type_id`	    VARCHAR(60),	
	`first_name`	VARCHAR(100),	
	`last_name`		VARCHAR(100),
	`gender`		VARCHAR(20),		
	`sede`		    VARCHAR(100),		
	`jornada`		VARCHAR(1000),		
	`grado_cod` 	VARCHAR(80),		
	`group` 		VARCHAR(10)		
	`date_birth`	VARCHAR(100),			
	`is_active`		BOOLEAN,		
PRIMARY KEY (`idUser`)) ENGINE=InnoDB AUTO_INCREMENT=3;

{
    "year":"112233445",
    "document_id":"112233445",
    "type_id": "admindepa@gmail.com",
    "first_name": "11223344",
    "last_name": "3148965516",
    "gender": "Calle 8 2 - 77",
    "sede": "url_photo",
    "jornada": "",
    "grado_cod": "1",
    "group": "10-11-1987",
    "date_birth": "",
    "is_active": "1"
}	
-- SELECT * from Users WHERE email ='adminsige@gmail.com'
-- QUERY
SELECT Users.idUser, Users.document_id, Users.first_name, Users.last_name, Users.email, Users.password, Users.phone, Users.address, Users.photo, Users.created_at, Users.type_id, Users.date_birth, Users.rh, Users.idSede, Users.is_active, Sede.name_sede 
FROM Users
INNER JOIN Sede ON Sede.idSede = Users.idSede
WHERE Users.email = "adminsige@gmail.com"