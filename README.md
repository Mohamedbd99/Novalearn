# 🌟 NovaLearn - Version Web

NovaLearn est une plateforme web dédiée aux élèves ayant des troubles d'apprentissage. Cette version permet aux enseignants de publier des cours, aux élèves de faire des exercices, et aux parents de suivre les progrès. Les médecins spécialistes partagent des vidéos de coaching, accessibles aux  enseignants et les parents .


## 🚀 Objectifs du projet

NovaLearn est une plateforme éducative pensée pour les élèves ayant des troubles d'apprentissage.  
Notre objectif principal est de faciliter l’accès à des contenus pédagogiques adaptés, interactifs et motivants.

La plateforme permet aussi aux enseignants de suivre les progrès des élèves, aux parents de s’impliquer dans leur accompagnement, et aux médecins spécialistes de proposer des ressources de coaching.  
NovaLearn crée ainsi un écosystème complet autour de l’élève, en combinant pédagogie, suivi personnalisé et outils technologiques modernes.


## 👨‍💻 Technologies utilisées

### Backend :
- **PHP 8.x**
- **Symfony 6.x**
- **Doctrine ORM**
- **Composer**

### Frontend :
- **Twig** (moteur de templates Symfony)
- **HTML5 / CSS3**
- **JavaScript**
- **Bootstrap 5**

### Sécurité & Authentification :
- **Symfony Security** (gestion des utilisateurs et des rôles)
- **Symfony ResetPasswordBundle** (réinitialisation de mot de passe)
- **Symfony Mailer** (envoi d’e-mails pour réinitialisation)

### Base de données :
- **MySQL** 

### Génération de documents :
- **KnpSnappyBundle** (PDF avec wkhtmltopdf)

### Outils & Intégration IA :
- **Webpack Encore** (gestion des assets)
- **Gemini AI** (intégré pour certaines fonctionnalités d’IA)

## 📦 Installation et lancement du projet

### ✅ Prérequis

Avant de commencer, assurez-vous d’avoir installé :

- PHP 8.1 ou supérieur
- Composer
- MySQL ou MariaDB
- Symfony CLI (facultatif mais recommandé)
- Node.js et npm (pour gérer les assets avec Webpack Encore)
- wkhtmltopdf (pour la génération de PDF via KnpSnappyBundle)

### ⚙️ Étapes d’installation

1. **Cloner le projet**
   ```bash
   git clone https://github.com/votre-utilisateur/novalearn-web.git
   cd novalearn-web
composer install

DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_bdd"
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate


npm install
npm run dev

Lancer le serveur de développement
Avec Symfony CLI :
symfony server:start



## 🧑‍🤝‍🧑 Rôles utilisateurs

NovaLearn utilise le système de rôles de Symfony pour gérer les autorisations et définir l'accès aux différentes fonctionnalités de la plateforme. Les rôles sont définis selon les types d’utilisateurs suivants :

### 🎓 Rôles disponibles

- **`ROLE_ADMIN`** : 
  - Accès complet à toutes les fonctionnalités de l’administration, y compris la gestion des utilisateurs 
  - Gestion des médecins, des enseignants et des parents,les éleves

  - **`ROLE_MEDECIN`** : 
  - Accès à l’espace médical pour partager des **blogs** et des conseils.
  - Peut **ajouter, modifier et supprimer des ressources médicales** (telles que des vidéos, articles et autres contenus de coaching).


- **`ROLE_ENSEIGNANT`** : 
  - Accès à la gestion des cours, exercices et évaluations des élèves.
  - Peut **générer des cours spécifiques pour les élèves en difficulté**, en s'appuyant sur l'assistant virtuel IA pour personnaliser les contenus pédagogiques.

- **`ROLE_PARENT`** : 
  - Accès aux informations de progression de leurs enfants.
  - Peut consulter des vidéos et articles de coaching.
  - Peut **soumettre une réclamation** en cas de problème ou de besoin spécifique concernant l’évolution ou le suivi pédagogique de leur enfant.

**`ROLE_ELEVE`** : 
  - Accès aux cours et exercices créés pour leur niveau et leurs besoins spécifiques.
  - Peut suivre leur propre progression et recevoir des récompenses gamifiées.


### ⚙️ Gestion des rôles dans Symfony

Les rôles sont définis dans la configuration de sécurité de Symfony (`config/packages/security.yaml`) comme suit :

```yaml
security:
    # ... autres configurations
    role_hierarchy:
        ROLE_ADMIN:       [ROLE_USER, ROLE_MEDECIN, ROLE_ENSEIGNANT, ROLE_PARENT, ROLE_ELEVE]
        ROLE_ENSEIGNANT:  [ROLE_USER, ROLE_ELEVE]
        ROLE_MEDECIN:     [ROLE_USER]
        ROLE_PARENT:      [ROLE_USER]



## 🔐 Fonctionnalités principales

### 🧑‍⚖️ **Gestion des utilisateurs**
- **Création et gestion des comptes utilisateurs** : Les administrateurs peuvent créer, modifier ou supprimer des comptes pour les enseignants, médecins, parents et élèves.
- **Attribution des rôles** : Les administrateurs attribuent des rôles spécifiques à chaque utilisateur (enseignant, médecin, parent, élève) pour définir les permissions et l'accès aux fonctionnalités.
- **Gestion des permissions** : Contrôle de l’accès aux différentes parties de la plateforme selon les rôles (accès aux cours, aux blogs, aux ressources médicales, etc.).

### 📚 **Gestion des cours et exercices**
- **Création et gestion des cours** : Les enseignants peuvent créer, modifier et gérer des cours avec des exercices interactifs et des évaluations.
- **Suivi des performances des élèves** : Les enseignants suivent les progrès des élèves et peuvent adapter les cours en fonction des résultats.
- **Personnalisation des parcours d’apprentissage** : L’assistant virtuel IA aide à créer des parcours d’apprentissage personnalisés pour les élèves en difficulté.

### 🩺 **Gestion des blogs médicaux**
- **Publication de contenu médical** : Les médecins peuvent publier des articles, des vidéos et des ressources éducatives pour aider les parents et les enseignants à soutenir les élèves.
- **Modification et suppression des publications** : Les médecins peuvent mettre à jour ou supprimer leurs blogs pour maintenir l’information à jour.
- **Consultation des ressources** : Les parents et les enseignants peuvent accéder aux articles de coaching et aux vidéos pour améliorer leur compréhension des besoins des élèves.

### 📩 **Gestion des réclamations**
- **Soumission de réclamations** : Les parents peuvent soumettre des réclamations concernant le parcours éducatif de leurs enfants (problèmes de contenu, questions sur l’enseignement, etc.).
- **Suivi des réclamations** : Les administrateurs ou les enseignants peuvent suivre l'état des réclamations et fournir des réponses ou solutions adaptées.
- **Gestion des demandes** : Les réclamations sont traitées, archivées et résolues en fonction de la nature du problème et des actions nécessaires.

### 📝 **Gestion des quiz**

- **Quiz personnalisés avec IA** : L'IA génère des quiz sur mesure pour chaque élève, en fonction de son niveau de compréhension et de ses progrès. Cela permet d'ajuster les quiz pour mieux répondre aux besoins spécifiques de chaque élève et de les rendre plus dynamiques.


## 📁 Arborescence du projet

novalearn/
├── assets/                     # Contient les ressources frontend comme les fichiers CSS, JS, images, etc.
│   ├── images/                 # Images utilisées dans l’application
│   ├── js/                     # Fichiers JavaScript
│   └── styles/                 # Fichiers CSS ou SCSS
├── bin/                         # Scripts utiles pour l'exécution du projet
│   └── console                  # Console Symfony (pour la gestion des commandes)
├── config/                      # Configuration des services et de l'application
│   ├── packages/                # Configuration de services tiers (ex : mails, bases de données)
│   ├── routes.yaml              # Configuration des routes
│   └── services.yaml            # Configuration des services Symfony
├── public/                      # Répertoire web accessible par l'utilisateur
│   ├── assets/                  # Liens vers les ressources publiques (CSS, JS, images)
│   └── index.php                # Point d'entrée principal de l'application web
├── src/                         # Contient tous les fichiers PHP du projet
│   ├── Controller/              # Contrôleurs pour gérer les requêtes HTTP
│   ├── Entity/                  # Entités liées à la base de données (ex : User, Blog)
│   ├── Form/                    # Formulaires utilisés dans le projet
│   ├── Repository/              # Repositories pour l'accès à la base de données
│   ├── Service/                 # Services spécifiques de l'application (logique métier)
│   └── Security/                # Gestion de la sécurité (authentification, rôles)
├── templates/                   # Templates Twig pour la partie frontend
│   ├── base.html.twig           # Template de base pour l'interface utilisateur
│   └── blog/                    # Templates spécifiques aux blogs
├── translations/                # Fichiers de traduction (pour gérer plusieurs langues)
│   └── messages.fr.yaml         # Traduction pour le français
├── var/                         # Contient les fichiers générés et temporaires
│   ├── cache/                   # Cache de l'application
│   └── log/                     # Fichiers de log pour débogage
├── vendor/                      # Dépendances du projet via Composer
├── .env                         # Fichier de configuration de l'environnement (base de données, API, etc.)
├── composer.json                # Dépendances PHP et configuration Composer
├── phpunit.xml.dist             # Configuration de PHPUnit pour les tests unitaires
└── README.md                    # Documentation du projet



## 👥 Équipe projet

Ce projet a été réalisé dans le cadre d’un projet académique par une équipe pluridisciplinaire composée de :

### 📂 Gestion fonctionnelle par modules
- 👤 **Yassine Gharsallah** – Gestion des utilisateurs
- 🧩 **Mohamed Ben Dammer** – Gestion des quiz
- 📘 **Cyrine Berrabah** – Gestion des cours et exercices
- 🩺 **Ailoum Walaibe** – Gestion des blogs médicaux
- 📨 **Rami [Nom de famille]** – Gestion des réclamations



## 📄 Licence

Ce projet ne dispose pas encore d’une licence officielle.  
Toute réutilisation, modification ou diffusion du code est interdite sans l’autorisation explicite des auteurs du projet.
