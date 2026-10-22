# Projet - thème enfant WordPress

## Équipe et concept du projet

Ce dépôt sert de base au thème enfant d'un site WordPress. L'objectif est de mettre en place une structure propre, évolutive et facilement maintenable pour plusieurs contributeurs.

- Équipe : Équipe de développement du projet
- Concept : personnalisation et extension du thème parent avec un design cohérent, des styles spécifiques et des scripts utiles.
- Objectif : fournir une base de travail collaborative, documentée et prête à être étendue.

## Outils utilisés

- GitHub pour le versionnement et la collaboration
- Git pour la gestion des branches et des commits
- VS Code comme environnement de développement
- WordPress + thème parent
- HTML, CSS, JavaScript, PHP

## Conventions de travail

### Branches

- `main` : branche principale stable
- `feature/...` : nouvelles fonctionnalités
- `fix/...` : corrections
- `docs/...` : documentation
- `hotfix/...` : correctifs urgents

### Commits

Format recommandé :

- `feat: ajout d'une fonctionnalité`
- `fix: correction d'un bug`
- `docs: mise à jour de la documentation`
- `style: ajustement CSS`
- `chore: maintenance du projet`

### Revue de code / pull requests

- Chaque modification doit être proposée via une pull request.
- Au moins un relecteur doit valider la PR avant fusion.
- Les changements doivent rester cohérents avec les conventions du projet.

## Répartition des tâches

| Membre | Rôle principal | Tâches |
| --- | --- | --- |
| Développeur 1 | Base du thème | Structure du thème enfant, styles, configuration |
| Développeur 2 | Front-end | Intégration CSS, composants visuels, ajustements UI |
| Développeur 3 | Documentation | README, conventions, suivi des tâches |
| Équipe | Validation | Revue de code, tests et validation finale |

## Structure du dépôt

```text
.
├── .gitignore
├── README.md
├── functions.php
├── style.css
├── index.php
├── assets/
│   ├── css/
│   │   └── theme.css
│   └── js/
│       └── main.js
└── .github/
    └── ISSUE_TEMPLATE/
```

## Mise en route

1. Cloner le dépôt.
2. Vérifier la configuration WordPress.
3. Définir le thème parent dans l'installation WordPress.
4. Activer le thème enfant.
5. Personnaliser les styles et les fonctionnalités selon les besoins du projet.

## À retenir

Ce dépôt constitue la base du projet et doit rester propre, documenté et aligné sur les bonnes pratiques de collaboration.
