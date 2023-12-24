CREATE DATABASE YCODE

CREATE TABLE roles (
                       id_role INT PRIMARY KEY AUTO_INCREMENT,
                       role VARCHAR(255)
);

CREATE TABLE classes(
                        id_classe INT PRIMARY KEY AUTO_INCREMENT,
                        speciality VARCHAR(255),
                        classename VARCHAR(100),
                        formateur VARCHAR(100),
                        promo VARCHAR(255)
);

CREATE TABLE users(
                      id_user INT PRIMARY KEY AUTO_INCREMENT,
                      lname VARCHAR(255),
                      fname VARCHAR(255),
                      email VARCHAR(255),
                      phone VARCHAR(255),
                      passwordd VARCHAR(255),
                      id_role INT,
                      id_classe INT
);

CREATE TABLE privilege(
                          id_pri INT PRIMARY KEY AUTO_INCREMENT,
                          privilege VARCHAR(255)
);
CREATE TABLE user_privilege(
                               id_privilege INT,
                               id_user INT ,
                               PRIMARY KEY(id_privilege,id_user)
);

ALTER Table classe ADD constraint fk_classe_user FOREIGN KEY (formateur) REFERENCES utilisateur(id_user);

ALTER TABLE utilisateur ADD constraint fk_user_classe FOREIGN KEY (id_classe) REFERENCES classe(id_classe);

ALTER Table utilisateur ADD constraint fk_user_role FOREIGN KEY (id_role) REFERENCES role(id_role);

ALTER TABLE user_privilege ADD constraint fk_privilege_user FOREIGN key (id_privilege) REFERENCES privilege(id_pri);

ALTER Table user_privilege ADD constraint fk_user_privilege FOREIGN KEY (id_user) REFERENCES utilisateur(id_user);