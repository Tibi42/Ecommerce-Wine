# Structure Atomic Design

Ce projet utilise la méthodologie **Atomic Design** pour organiser les composants Twig de manière modulaire et réutilisable.

## 📁 Structure des dossiers

```
templates/
├── components/
│   ├── atoms/          # Composants atomiques (les plus petits)
│   ├── molecules/      # Combinaisons d'atomes
│   └── organisms/      # Combinaisons de molécules
├── layouts/            # Templates de mise en page
└── pages/              # Pages finales avec contenu réel
```

## 🧩 Niveaux de composants

### 1. Atoms (Atomes)
Les composants les plus petits et indivisibles. Ils ne peuvent pas être décomposés davantage.

**Exemples :**
- `button.html.twig` - Bouton
- `input.html.twig` - Champ de saisie
- `label.html.twig` - Étiquette
- `heading.html.twig` - Titre
- `image.html.twig` - Image

**Usage :**
```twig
{% include 'components/atoms/button.html.twig' with {
    text: 'Cliquer',
    variant: 'primary',
    type: 'button'
} %}
```

### 2. Molecules (Molécules)
Combinaisons de plusieurs atomes qui forment un composant fonctionnel.

**Exemples :**
- `form-group.html.twig` - Groupe de formulaire (label + input)
- `card.html.twig` - Carte générique
- `bottle-card.html.twig` - Carte de bouteille (spécifique au projet)

**Usage :**
```twig
{% include 'components/molecules/form-group.html.twig' with {
    label: 'Email',
    name: 'email',
    type: 'email',
    required: true
} %}
```

### 3. Organisms (Organismes)
Combinaisons de molécules et/ou d'autres organismes pour créer des sections complexes.

**Exemples :**
- `header.html.twig` - En-tête du site
- `footer.html.twig` - Pied de page
- `product-grid.html.twig` - Grille de produits

**Usage :**
```twig
{% include 'components/organisms/header.html.twig' %}
```

### 4. Templates (Mises en page)
Structures de page qui définissent la disposition générale sans contenu spécifique.

**Exemples :**
- `layouts/default.html.twig` - Layout par défaut

**Usage :**
```twig
{% extends 'layouts/default.html.twig' %}
```

### 5. Pages
Pages finales avec du contenu réel, utilisant les templates et composants.

**Exemples :**
- `pages/home.html.twig` - Page d'accueil

**Usage :**
```twig
{% extends 'layouts/default.html.twig' %}

{% block body %}
    {# Contenu de la page #}
{% endblock %}
```

## 🎯 Principes

1. **Réutilisabilité** : Les composants doivent être réutilisables dans différents contextes
2. **Isolation** : Chaque composant doit être indépendant et autonome
3. **Composition** : Les composants complexes sont construits à partir de composants plus simples
4. **Cohérence** : Utiliser les mêmes atomes et molécules garantit une interface cohérente

## 📝 Bonnes pratiques

1. **Nommage** : Utilisez des noms clairs et descriptifs
2. **Documentation** : Chaque composant doit avoir un commentaire d'usage en haut
3. **Paramètres** : Utilisez des valeurs par défaut avec `|default()`
4. **Flexibilité** : Permettez la personnalisation via des classes CSS additionnelles
5. **Accessibilité** : Incluez les attributs nécessaires (aria, alt, etc.)

## 🔄 Migration depuis l'ancienne structure

L'ancien fichier `templates/home/index.html.twig` peut être remplacé par `templates/pages/home.html.twig`.

Pour utiliser la nouvelle structure dans vos contrôleurs :
```php
return $this->render('pages/home.html.twig', [
    'bottles' => $bottles,
]);
```

## 🚀 Prochaines étapes

1. Créer des styles CSS pour chaque composant
2. Ajouter des composants supplémentaires selon les besoins
3. Créer des variantes de composants (ex: button-primary, button-secondary)
4. Documenter les props de chaque composant



