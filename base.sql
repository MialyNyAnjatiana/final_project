create database emprunt;

use emprunt;

-- table
create table
    emp_membre (
        id_membre INT PRIMARY KEY auto_increment,
        nom VARCHAR(100),
        date_naissance DATE,
        genre VARCHAR(1),
        email VARCHAR(100),
        ville VARCHAR(100),
        mdp VARCHAR(100),
        img_profil VARCHAR(100)
    );

create table
    emp_categorie_objet (
        id_categorie INT PRIMARY KEY auto_increment,
        nom_categorie VARCHAR(100)
    );

create table
    emp_objet (
        id_objet INT PRIMARY KEY auto_increment,
        nom_objet VARCHAR(100),
        id_categorie INT,
        id_membre INT,
        FOREIGN KEY (id_categorie) REFERENCES emp_categorie_objet (id_categorie),
        FOREIGN KEY (id_membre) REFERENCES emp_membre (id_membre)
    );

create table
    emp_image_objet (
        id_image INT PRIMARY KEY auto_increment,
        id_objet INT,
        nom_image VARCHAR(100),
        FOREIGN KEY (id_objet) REFERENCES emp_objet (id_objet)
    );

create table
    emp_emprunt (
        id_emprunt INT PRIMARY KEY auto_increment,
        id_objet INT,
        id_membre INT,
        date_emprunt DATE,
        date_retour DATE,
        FOREIGN KEY (id_objet) REFERENCES emp_objet (id_objet),
        FOREIGN KEY (id_membre) REFERENCES emp_membre (id_membre)
    );

-- data
INSERT INTO emp_membre (nom, date_naissance, genre, email, ville, mdp, img_profil) VALUES
('Rasoa Rakoto', '1990-03-15', 'F', 'rasoa.rakoto@example.com', 'Antananarivo', 'mdp_rasoa', 'rasoa_profil.jpg'),
('Jean Dupont', '1985-07-22', 'M', 'jean.dupont@example.com', 'Antsirabe', 'mdp_jean', 'jean_profil.jpg'),
('Sitraka Rajao', '1992-11-01', 'M', 'sitraka.rajao@example.com', 'Fianarantsoa', 'mdp_sitraka', 'sitraka_profil.jpg'),
('Voara Zafy', '1995-09-08', 'F', 'voara.zafy@example.com', 'Toamasina', 'mdp_voara', 'voara_profil.jpg');

INSERT INTO emp_categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

INSERT INTO emp_objet (nom_objet, id_categorie, id_membre) VALUES
-- Objets de Rasoa Rakoto (id_membre: 1)
('Kit de maquillage professionnel', 1, 1),
('Sèche-cheveux ionique', 1, 1),         
('Perceuse visseuse sans fil', 2, 1),     
('Ponceuse électrique', 2, 1),           
('Clé à molette ajustable', 3, 1),       
('Testeur de batterie auto', 3, 1),      
('Robot pâtissier multifonction', 4, 1),
('Mixeur plongeant', 4, 1),             
('Machine à coudre', 1, 1),              
('Trousse à outils basique', 2, 1),       

-- Objets de Jean Dupont (id_membre: 2)
('Set de pinceaux artistiques', 1, 2), 
('Lampe de manucure UV', 1, 2),        
('Scie sauteuse', 2, 2),                
('Niveau laser', 2, 2),                 
('Cric hydraulique', 3, 2),             
('Jeu de clés à cliquet', 3, 2),        
('Blender haute puissance', 4, 2),     
('Machine à café expresso', 4, 2),     
('Appareil photo instantané', 1, 2),   
('Kit de réparation vélo', 3, 2),       

-- Objets de Sitraka Rajao (id_membre: 3)
('Miroir grossissant lumineux', 1, 3), 
('Épilateur électrique', 1, 3),        
('Tournevis électrique de précision', 2, 3), 
('Pistolet à colle chaude', 2, 3),      
('Multimètre numérique', 3, 3),         
("Compresseur d'air portable", 3, 3),
('Friteuse sans huile', 4, 3),         
('Déshydrateur alimentaire', 4, 3),    
('Fer à boucler automatique', 1, 3),   
('Clé dynamométrique', 3, 3),           

-- Objets de Voara Zafy (id_membre: 4)
('Brosse nettoyante visage', 1, 4),     
('Rasoir électrique précision', 1, 4),  
('Kit de ponçage', 2, 4),                
('Décapeur thermique', 2, 4),           
('Testeur de pression des pneus', 3, 4),
('Chargeur de batterie intelligent', 3, 4),
('Machine à pain automatique', 4, 4),  
('Autocuiseur programmable', 4, 4),     
("Diffuseur d'huiles essentielles", 1, 4), 
('Kit de jardinage portatif', 2, 4);      

INSERT INTO emp_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
-- Emprunts
(3, 2, '2025-06-01', '2025-06-05'),  -- Jean emprunte la perceuse de Rasoa
(15, 1, '2025-05-20', '2025-05-27'), -- Rasoa emprunte le cric de Jean
(27, 4, '2025-07-01', '2025-07-10'), -- Voara emprunte la friteuse de Sitraka
(37, 3, '2025-07-03', '2025-07-09'), -- Sitraka emprunte la machine à pain de Voara
(7, 2, '2025-06-25', '2025-07-02'),  -- Jean emprunte le robot pâtissier de Rasoa
(13, 1, '2025-07-05', NULL),         -- Rasoa emprunte la scie sauteuse de Jean (non retourné)
(21, 4, '2025-06-10', '2025-06-12'), -- Voara emprunte le miroir de Sitraka
(33, 3, '2025-05-18', '2025-05-24'), -- Sitraka emprunte le kit de ponçage de Voara
(40, 1, '2025-07-08', NULL),         -- Rasoa emprunte le kit de jardinage de Voara (non retourné)
(1, 2, '2025-07-10', NULL);          -- Jean emprunte le kit de maquillage de Rasoa (non retourné)
