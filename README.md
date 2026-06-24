# Symfony Authentication Test

Application Symfony permettant :

* La création de compte utilisateur
* La connexion et déconnexion
* Le stockage sécurisé des mots de passe (hashage)
* La validation dynamique du mot de passe en JavaScript
* La validation côté serveur des données utilisateur

## Technologies utilisées

* PHP 8.4
* Symfony 7
* PostgreSQL 16
* Docker & Docker Compose
* JavaScript (vanilla)

## Prérequis

* Docker
* Docker Compose

## Installation

Cloner le dépôt :

```bash
git clone git@github.com:vyyvii/auth-test.git
cd auth-test
```

Construire et démarrer les conteneurs :

```bash
docker compose up --build -d
```

## Initialisation de la base de données

Entrer dans le conteneur PHP :

```bash
docker compose exec php bash
```

Installer les dépendances :
```bash
composer install
```

Exécuter les migrations :

```bash
php bin/console doctrine:migrations:migrate
```

Répondre `yes` lorsque Symfony demande confirmation.

## Lancement de l'application

Depuis le conteneur PHP :

```bash
php -S 0.0.0.0:8000 -t public
```

L'application sera accessible à l'adresse :

```text
http://localhost:8000
```

## Fonctionnalités

### Inscription

L'utilisateur peut créer un compte avec :

* Une adresse email valide
* Un mot de passe respectant les contraintes suivantes :

  * Minimum 8 caractères
  * Au moins une majuscule
  * Au moins un chiffre
  * Au moins un caractère spécial

Les contraintes sont vérifiées :

* Côté client (JavaScript)
* Côté serveur (Symfony Validator)

### Authentification

L'utilisateur peut :

* Se connecter
* Se déconnecter
* Accéder à son espace une fois authentifié

### Sécurité

Les mots de passe ne sont jamais stockés en clair.

Ils sont hashés automatiquement par Symfony avant d'être enregistrés en base de données.

## Structure du projet

```text
src/
├── Controller/
├── Entity/
├── Form/
├── Repository/
├── Security/

templates/
├── home/
├── registration/
└── security/

migrations/
docker/
```

## Exigences Fonctionnelles (FR)

### FR1 : Authentification utilisateur

L'application doit permettre à un utilisateur enregistré de se connecter à l'aide de son adresse e-mail et de son mot de passe.

#### Description

Un utilisateur ayant préalablement créé un compte doit pouvoir s'authentifier via un formulaire de connexion dédié.

#### Critères d'acceptation

##### FR1.1 - Affichage du formulaire de connexion

* L'application doit fournir une page de connexion dédiée.
* Cette page doit contenir :

  * Un champ de saisie pour l'adresse e-mail.
  * Un champ de saisie pour le mot de passe.
  * Un bouton de connexion.

##### FR1.2 - Connexion réussie

* Un utilisateur doit pouvoir se connecter à l'aide :

  * D'une adresse e-mail existante.
  * Du mot de passe associé à son compte.

* Après une authentification réussie :

  * Une session utilisateur doit être créée.
  * L'utilisateur doit être redirigé vers la page d'accueil.
  * Son adresse e-mail doit être affichée sur l'interface.

##### FR1.3 - Gestion des erreurs de connexion

* Si l'adresse e-mail n'existe pas :

  * La connexion doit être refusée.
  * Un message d'erreur doit être affiché.

* Si le mot de passe est incorrect :

  * La connexion doit être refusée.
  * Un message d'erreur doit être affiché.

* Le système ne doit pas indiquer si l'erreur provient de l'adresse e-mail ou du mot de passe.

##### FR1.4 - Gestion de la session

* La session utilisateur doit être conservée tant que l'utilisateur reste connecté.
* L'utilisateur authentifié doit pouvoir naviguer dans l'application sans devoir se reconnecter.

##### FR1.5 - Déconnexion

* Un utilisateur connecté doit pouvoir se déconnecter.
* Lors de la déconnexion :

  * La session doit être détruite.
  * L'utilisateur ne doit plus être considéré comme authentifié.
  * Les fonctionnalités réservées aux utilisateurs connectés ne doivent plus être accessibles.

##### FR1.6 - Sécurité des mots de passe

* Les mots de passe ne doivent jamais être stockés en clair.
* Les mots de passe doivent être hachés avant leur enregistrement en base de données.
* La vérification du mot de passe doit être effectuée à partir du hachage stocké.

---

### FR2 : Création de compte

L'application doit permettre à un visiteur de créer un nouveau compte utilisateur.

#### Critères d'acceptation

##### FR2.1 - Formulaire d'inscription

* L'application doit fournir une page d'inscription.
* Cette page doit contenir :

  * Un champ adresse e-mail.
  * Un champ mot de passe.
  * Une case d'acceptation des conditions d'utilisation.
  * Un bouton de validation.

##### FR2.2 - Validation de l'adresse e-mail

* L'adresse e-mail est obligatoire.
* L'adresse e-mail doit respecter un format valide.
* Une adresse e-mail déjà utilisée ne peut pas être enregistrée une seconde fois.

##### FR2.3 - Validation du mot de passe

Le mot de passe doit respecter les règles suivantes :

* Contenir au minimum 8 caractères.
* Contenir au moins une lettre majuscule.
* Contenir au moins un chiffre.
* Contenir au moins un caractère spécial.

##### FR2.4 - Validation dynamique côté client

* Les critères de validation du mot de passe doivent être affichés à l'utilisateur.
* L'état de chaque critère doit être mis à jour en temps réel pendant la saisie.
* Aucun rechargement de page ne doit être nécessaire.

##### FR2.5 - Validation côté serveur

* Toutes les contraintes doivent être vérifiées côté serveur.
* L'inscription doit être refusée si une règle n'est pas respectée.
* Des messages d'erreur explicites doivent être affichés.

##### FR2.6 - Création du compte

* Un compte utilisateur doit être créé lorsque toutes les validations sont satisfaites.
* Le mot de passe doit être haché avant son enregistrement.
* Les informations utilisateur doivent être enregistrées dans la base de données PostgreSQL.

---

### FR3 : Page d'accueil

#### FR3.1 - Utilisateur non authentifié

Un utilisateur non connecté doit voir :

* Un lien vers la page de connexion.
* Un lien vers la page d'inscription.

#### FR3.2 - Utilisateur authentifié

Un utilisateur connecté doit voir :

* Un message de bienvenue.
* Son adresse e-mail.
* Un bouton ou un lien de déconnexion.


## Architecture

* Utilisation du composant Security de Symfony pour l'authentification.
* Utilisation de Doctrine ORM pour la persistance des données.
* Utilisation de PostgreSQL comme base de données relationnelle.
* Validation du mot de passe côté client pour améliorer l'expérience utilisateur.
* Validation côté serveur pour garantir la sécurité et l'intégrité des données.

## Auteur

Victor Defauchy
