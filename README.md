# Gestion des Superhéros - TP Final PHP

## 📌 Description du Projet

Ce projet vise à développer une **API REST** en Laravel pour gérer les superhéros, ainsi qu'un **front-end** permettant l'utilisation de cette API. Le projet est réalisé en équipe et inclut une gestion utilisateur.

## 🛠️ Technologies Utilisées

### **Back-end**
- Laravel (API REST)
- MySQL (Base de données)
- Authentification Laravel (adaptée pour la gestion des utilisateurs)

### **Front-end**
- React / Vue / Next.js (au choix)
- Axios / Fetch API (pour les requêtes API)
- Bootstrap / Tailwind CSS (pour le style)

## 🏗️ Fonctionnalités
### **Superhéros**
- 📌 Création, modification, suppression et affichage des superhéros
- 📌 Gestion des attributs comme : 
  - Nom et pseudo
  - Sexe
  - Planète d'origine
  - Description
  - Superpouvoirs, gadgets, équipe, véhicule
  - Ville de protection
- 📌 Gestion des cas où certaines valeurs sont nulles

### **Utilisateurs**
- 🔐 Inscription et connexion sécurisées
- 🏷️ Un utilisateur peut gérer uniquement ses propres superhéros

### **Front-end**
- 🖥️ Interface intuitive permettant de :
  - Se connecter / s'inscrire
  - Rechercher et afficher les superhéros
  - Ajouter, modifier et supprimer des superhéros

## 📅 Rendu et Soutenance

- La soutenance aura lieu le **25 février**.
- Deux options pour rendre le projet :
  - **Dépôt public** : fournir les liens des repositories
  - **Dépôt privé** : inviter `remybms` au projet et fournir les liens
- Si un seul repository est rendu, bien séparer le **front-end** et le **back-end**.

## 🔄 Répartition des Tâches

### 📌 **Étape 1 : Analyse et Conception** (🧠 **Cam**)
- Définir les **besoins fonctionnels** et les rôles des utilisateurs.
- Concevoir la **base de données** (Modèle relationnel, schéma SQL).
- Définir les **routes API** et les structures de requêtes/réponses.
- Documenter les choix techniques et les prérequis du projet.

### 🏗️ **Étape 2 : Développement du Back-end (API Laravel)**
#### (👨‍💻 **Théo** - Gestion des utilisateurs & authentification)
- Installer **Laravel** et configurer l’environnement.
- Mettre en place le **système d’authentification** (inscription, connexion, JWT si nécessaire).
- Créer le modèle **Utilisateur** et ses relations avec les superhéros.
- Protéger les routes pour que chaque utilisateur gère **uniquement ses superhéros**.

#### (👩‍💻 **Stan** - Gestion des superhéros & API CRUD)
- Développer les **routes API REST** pour gérer les superhéros (ajout, modification, suppression, affichage).
- Implémenter la gestion des **relations** (équipes, gadgets, villes, pouvoirs, etc.).
- Vérifier et sécuriser les requêtes avec **middleware** et **policies**.
- Tester les endpoints via Postman ou Insomnia.

### 🖥️ **Étape 3 : Développement du Front-end**
#### (🎨 **Ben** - Interface utilisateur et intégration avec l’API)
- Choisir une technologie front-end (**React, Vue ou Next.js**).
- Créer les **composants de base** (pages de connexion, liste des superhéros, formulaires).
- Gérer la **connexion avec l’API** via **Axios** / Fetch API.
- Ajouter des fonctionnalités interactives (formulaires, boutons de modification, etc.).

#### (👨‍💻 **Cam** - Améliorations et tests UI)
- Intégrer **Bootstrap / Tailwind CSS** pour un design responsive.
- Ajouter une **gestion des erreurs et validations** côté front-end.
- Effectuer des **tests utilisateur** et corriger les bugs d'affichage.

### 🔍 **Étape 4 : Tests, Corrections et Déploiement**
#### (👩‍💻 **Théo & Stan** - Tests et corrections Back-end)
- Effectuer des **tests unitaires et d’intégration** sur Laravel.
- Vérifier la **sécurité et les permissions** des utilisateurs.
- Optimiser les requêtes et la gestion des erreurs.

#### (👨‍💻 **Ben & Cam** - Finalisation du Front-end et Documentation)
- Vérifier le fonctionnement de l’API avec le front-end.
- Documenter l'utilisation de l’API et le déploiement du projet.
- Déployer l’API et le front-end sur un serveur (Heroku, Vercel, Netlify, etc.).

## 🔥 Organisation du Projet
✅ Se tenir informé via un **outil de suivi** (Trello, Notion, GitHub Projects).
✅ Faire des **revues de code** entre les membres pour éviter les erreurs.
✅ Tester chaque fonctionnalité avant de passer à l’étape suivante.

---

🚀 
