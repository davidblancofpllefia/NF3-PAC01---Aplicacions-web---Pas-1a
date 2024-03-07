<?php

        require("class.user.insert.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=database;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO, 1);
        echo "Datos del Primer Usuario: <br />";
        echo "ID: " . $objUser->getID() . "<br />";
        echo "Nombre: " . $objUser->getFirstName() . "<br />";
        echo "Apellido: " . $objUser->getLastName() . "<br />";
        echo "Contraseña: " . $objUser->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser->getTimeAccountCreated() . "<br/><br/>";
        
        $objUser2 = new User($objPDO, 2);
        echo "Datos del Segundo Usuario: <br />";
        echo "ID: " . $objUser2->getID() . "<br />";
        echo "Nombre: " . $objUser2->getFirstName() . "<br />";
        echo "Apellido: " . $objUser2->getLastName() . "<br />";
        echo "Contraseña: " . $objUser2->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser2->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser2->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser2->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser2->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser2->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser2->getTimeAccountCreated() . "<br/><br/>";
        
        

        $objUser3 = new User($objPDO, 3);
        echo "Datos del Tercer Usuario: <br />";
        echo "ID: " . $objUser3->getID() . "<br />";
        echo "Nombre: " . $objUser3->getFirstName() . "<br />";
        echo "Apellido: " . $objUser3->getLastName() . "<br />";
        echo "Contraseña: " . $objUser3->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser3->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser3->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser3->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser3->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser3->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser3->getTimeAccountCreated() . "<br/><br/>";


        $auxiliar = '';
        $auxiliar = $objUser2->getFirstName();
        $objUser2->setFirstName($objUser->getFirstName());
        $objUser->setFirstName($auxiliar);
        $auxiliar = $objUser2->getLastName();
        $objUser2->setLastName($objUser->getLastName());
        $objUser->setLastName($auxiliar);
        $auxiliar = $objUser2->getUsername();
        $objUser2->setUsername($objUser->getUsername());
        $objUser->setUsername($auxiliar);
        $auxiliar = $objUser2->getPassword();
        $objUser2->setPassword($objUser->getPassword());
        $objUser->setPassword($auxiliar);
        $auxiliar = $objUser2->getEmailAddress();
        $objUser2->setEmailAddress($objUser->getEmailAddress());
        $objUser->setEmailAddress($auxiliar);
        $auxiliar = $objUser2->getDateLastLogin();
        $objUser2->setDateLastLogin($objUser->getDateLastLogin());
        $objUser->setDateLastLogin($auxiliar);
        $auxiliar = $objUser2->getTimeLastLogin();
        $objUser2->setTimeLastLogin($objUser->getTimeLastLogin());
        $objUser->setTimeLastLogin($auxiliar);
        $auxiliar = $objUser2->getDateAccountCreated();
        $objUser2->setDateAccountCreated($objUser->getDateAccountCreated());
        $objUser->setDateAccountCreated($auxiliar);
        $auxiliar = $objUser2->getTimeAccountCreated();
        $objUser2->setTimeAccountCreated($objUser->getTimeAccountCreated());
        $objUser->setTimeAccountCreated($auxiliar);

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();
       
        echo "Información del Primer Usuario: <br />";
        echo "ID: " . $objUser->getID() . "<br />";
        echo "Nombre: " . $objUser->getFirstName() . "<br />";
        echo "Apellido: " . $objUser->getLastName() . "<br />";
        echo "Contraseña: " . $objUser->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser->getTimeAccountCreated() . "<br/><br/>";
        
        echo "Información del Segundo Usuario: <br />";
        echo "ID: " . $objUser2->getID() . "<br />";
        echo "Nombre: " . $objUser2->getFirstName() . "<br />";
        echo "Apellido: " . $objUser2->getLastName() . "<br />";
        echo "Contraseña: " . $objUser2->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser2->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser2->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser2->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser2->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser2->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser2->getTimeAccountCreated() . "<br/><br/>";
        
        echo "Información del Tercer Usuario: <br />";
        echo "ID: " . $objUser3->getID() . "<br />";
        echo "Nombre: " . $objUser3->getFirstName() . "<br />";
        echo "Apellido: " . $objUser3->getLastName() . "<br />";
        echo "Contraseña: " . $objUser3->getUsername() . "<br />";
        echo "Nombre de Usuario: " . $objUser3->getPassword() . "<br />";
        echo "Correo Electrónico: " . $objUser3->getEmailAddress() . "<br />";
        echo "Fecha último inicio de sesión: " . $objUser3->getDateLastLogin() . "<br />";
        echo "Hora último inicio de sesión: " . $objUser3->getTimeLastLogin() . "<br />";
        echo "Fecha de creación de cuenta: " . $objUser3->getDateAccountCreated() . "<br />";
        echo "Hora de creación de cuenta: " . $objUser3->getTimeAccountCreated() . "<br/><br/>";



