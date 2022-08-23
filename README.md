francais

# Projet-steaming-business
crée un site de streaming pour le business

# A avoir : 
Installer Sourcetree pour le travail de groupes!
Maitriser le git-flow.

# Bonne pratique
Toujour faire des Pull pour verifier si un autre developpeur a ajouter une branche du meme nom que celle actuel ou avant de faire un commit et de push
Ne jamais mettre des espaces ou des majuscul. espace devient : _, majuscule devient minuscule:

# git-flow : 
Faire des push sur la branche main **QUE SI** nous avons une version **stable et finalisé** se mettre d'accord ensemble avant de push
Branche main = version stable.

Le code s'ecrira principalement sur des sous-branche de la branche **develop** en gros on creer une branche develop avec d'autre branche a l'interieur pour chaque pages exemple branche **feature_homepage** pour la page d'accueil, note : toujour ecrire "feature" avant d'ecrire quoi que se soit.
Branche develop = mise a jour (v1, v2, v3)

Quand on a finit de coder la premier page dans la branche **feature_homepage** on creer une branche **feature_about_me** etc jusqu'à avoir un site complet.
Une fois le site complet faire un merge pour relier cette branche a la branche develop.
Puis corriger des erreur faire des version stable merger sur la branche develop si elle est stable on la merge sur la branche main.


### donner un accés a sont projet
Sur GitHub, accédez à la page principale du dépot.
Sous le nom de votre projet, cliquez sur Paramètres.
Dans la barre latérale de gauche, cliquez sur Collaborateurs.
