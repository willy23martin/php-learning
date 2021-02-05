CREATE TABLE pdg_professori (
    sk_int_id INT(11) UNSIGNED NOT NULL,
    str_codice VARCHAR(25) NOT NULL,
    str_nome VARCHAR(50) NOT NULL,
    str_cognome VARCHAR(50) NOT NULL,
    CONSTRAINT pk_str_professor PRIMARY KEY (str_codice)
)ENGINE=INNODB;

CREATE TABLE pdg_carriere_universitarie (
sk_int_id INT NOT NULL,
str_codice VARCHAR(25) NOT NULL,
str_dipartimento VARCHAR(255) NOT NULL,
str_facolta VARCHAR(255) NOT NULL,
str_carriera VARCHAR(255) NOT NULL,
str_codice_rappresentante VARCHAR(25) NOT NULL,
CONSTRAINT pk_carriera_universitaria PRIMARY KEY (str_codice),
CONSTRAINT fk_pdg_rappresentante FOREIGN KEY (str_codice_rappresentante) REFERENCES pdg_professori (str_codice)
)ENGINE=INNODB;
    
CREATE TABLE pdg_gruppo_studenti(
   sk_int_id INT NOT NULL,
   int_codice INT NOT NULL,
   CONSTRAINT pk_gruppo PRIMARY KEY (int_codice)
)ENGINE=INNODB;

CREATE TABLE pdg_studenti(
   sk_int_id INT NOT NULL,
   str_codice VARCHAR(25) NOT NULL,
   str_nome VARCHAR(50) NOT NULL,
   str_cognome VARCHAR(50) NOT NULL,
   int_codice_gruppo INT NULL,
   CONSTRAINT pk_str_studente PRIMARY KEY (str_codice),
     CONSTRAINT fk_int_gruppo FOREIGN KEY (int_codice_gruppo) REFERENCES pdg_gruppo_studenti (int_codice)
)ENGINE=INNODB;

CREATE TABLE pdg_progetto (
    sk_int_id INT NOT NULL,
    str_codice VARCHAR(25) NOT NULL,
    str_codice_tutor VARCHAR(25) NOT NULL,
    CONSTRAINT pk_str_progetto PRIMARY KEY (str_codice),
    CONSTRAINT fk_tutor FOREIGN KEY (str_codice_tutor) REFERENCES pdg_professori (str_codice)
)ENGINE=INNODB;

CREATE TABLE pdg_iscrizioni (
    sk_int_id INT NOT NULL,
    str_codice_studente VARCHAR(25) NULL,
    int_codice_gruppo INT NULL,
    str_codice_progetto VARCHAR(255) NOT NULL,
    CONSTRAINT pk_pdg_iscrizioni PRIMARY KEY (sk_int_id),
    CONSTRAINT fk_studente FOREIGN KEY (str_codice_studente) REFERENCES pdg_studenti (str_codice),
    CONSTRAINT fk_gruppo FOREIGN KEY (int_codice_gruppo) REFERENCES pdg_gruppo_studenti (int_codice),
    CONSTRAINT fk_progetto FOREIGN KEY (str_codice_progetto) REFERENCES pdg_progetto (str_codice)
)ENGINE=INNODB;

CREATE TABLE pdg_user (
    sk_int_id INT NOT NULL,
    str_username VARCHAR(25) NOT NULL UNIQUE,
    str_email VARCHAR(255) NOT NULL UNIQUE,
    str_password VARCHAR(255) NOT NULL,
    str_codice_studente VARCHAR(25) NULL,
    str_codice_professore VARCHAR(25) NULL,
    CONSTRAINT pk_pdg_user PRIMARY KEY (str_email),
    CONSTRAINT fk_pdg_studente FOREIGN KEY (str_codice_studente) REFERENCES pdg_studenti (str_codice),
    CONSTRAINT fk_pdg_professore FOREIGN KEY (str_codice_professore) REFERENCES pdg_professori (str_codice)
    )ENGINE=INNODB;

