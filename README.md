# Installer le projet

- Copier le fichier .env en .env.local
- Modifier les variables d'environnement dans .env.local
- Créer la base de donnée avec cette requete SQL : 
```code
    CREATE TABLE `2025_M1`.`user` (
        `user_id` INT NOT NULL AUTO_INCREMENT,
        `user_login` TEXT NOT NULL ,
        `user_password` LONGTEXT NOT NULL,
        `user_compte_id` INT NOT NULL ,
        `user_mail` TEXT NOT NULL,
        `user_date_new` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `user_date_login` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`user_id`),
        UNIQUE `cle-etrangere` (`user_compte_id`)
    ) ENGINE = InnoDB;

    CREATE TABLE produit (
        id_p INT AUTO_INCREMENT PRIMARY KEY,
        type_p VARCHAR(100) NOT NULL,
        designation_p VARCHAR(255) NOT NULL,
        prix_ht DECIMAL(10,2) NOT NULL,
        date_in DATE NOT NULL,
        timeS_in TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
        stock_p INT DEFAULT 0
    );
```