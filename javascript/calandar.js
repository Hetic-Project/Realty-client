// Variable globale pour stocker la date actuelle
let currentDate = new Date(); 

function generateCalendar() {

  const currentYear = currentDate.getFullYear();

  const container = document.getElementById('calendar-container');
  // Effacer le contenu précédent de la div
  container.innerHTML = ''; 

  // Créer un élément div pour l'en-tête du calendrier
  const header = document.createElement('div');
  header.style.display = 'flex';
  header.style.justifyContent = 'space-between';
  // Ajouter l'en-tête à la div container
  container.appendChild(header);

  const previousBtn = document.createElement('button');
  previousBtn.textContent = 'Mois précédent';
  previousBtn.addEventListener('click', showPreviousMonth);
  header.appendChild(previousBtn);

  // Créer un élément h2 pour afficher le mois courant
  const currentMonth = document.createElement('h2');

  /*

  la méthode toLocaleString est utilisée pour formater la date en fonction des paramètres régionaux spécifiés. 
  Dans ce cas, la région spécifiée est "fr-FR", ce qui correspond au français pour la France.

  Les options { month: 'long', year: 'numeric' } indiquent que nous voulons afficher le mois sous forme de nom complet 
  (par exemple, "janvier", "février", etc.) et l'année sous forme de nombre à quatre chiffres (par exemple, "2023").

  */

  currentMonth.textContent = currentDate.toLocaleString('fr-FR', { month: 'long', year: 'numeric' });
  header.appendChild(currentMonth);

  const nextBtn = document.createElement('button');
  nextBtn.textContent = 'Mois suivant';
  nextBtn.addEventListener('click', showNextMonth);
  header.appendChild(nextBtn);

  // Créer un élément div pour le calendrier
  const calendar = document.createElement('div');
  calendar.style.display = 'grid';

  /*
    gridTemplateColumns : Cette propriété est utilisée pour spécifier le nombre et la largeur 
    des colonnes dans un conteneur de grille.

    la ligne 62 permet de diviser l'espace du conteneur du calendrier en 7 colonnes égales, 
    ce qui correspond aux 7 jours de la semaine. Chaque jour du calendrier sera ensuite 
    positionné dans une colonne distincte, facilitant ainsi l'affichage organisé et 
    régulier des jours de la semaine.

    Le mot-clé repeat : permet de répéter un certain nombre de fois un modèle de colonne 
    ou de ligne dans une grille.
  */

  calendar.style.gridTemplateColumns = 'repeat(7, 1fr)';
  // Ajouter le calendrier à la div container
  container.appendChild(calendar);

  const weekdays = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'];

  for (let i = 0; i < weekdays.length; i++) {
    // Créer un élément div pour chaque jour du mois
    const weekday = document.createElement('div');
    weekday.textContent = weekdays[i];
    // Ajouter le jour de la semaine au calendrier
    calendar.appendChild(weekday);
  }
  // Crée un objet Date pour représenter le premier jour du mois actuel
  const firstDayOfMonth = new Date(currentYear, currentDate.getMonth(), 1);
  // Crée un objet Date pour représenter le dernier jour du mois actuel
  const lastDayOfMonth = new Date(currentYear, currentDate.getMonth() + 1, 0);
  // Récupère le nombre de jours dans le mois actuel en utilisant la méthode getDate() de l'objet Date
  const daysInMonth = lastDayOfMonth.getDate();

  /*

    Les lignes de code suivantes sont utilisées pour  déterminer les informations de base sur le mois en cours, 
    telles que le premier jour du mois, le dernier jour du mois, le nombre total de jours dans le mois et 
    le décalage de démarrage (jour de la semaine où commence le mois). Ces informations sont utilisées dans la boucle 
    suivante pour générer les cellules du calendrier avec les bons numéros de jour.

  */

  // Calcule le décalage de démarrage (le jour de la semaine où commence le mois)
  let startOffset = firstDayOfMonth.getDay() - 1;
  // Si le décalage est -1 (le jour est un dimanche), nous le changeons à 6 (dimanche est le dernier jour de la semaine)
  if (startOffset === -1) {
    startOffset = 6;
  }
  // Variable pour garder une trace du numéro du jour dans le mois
  let dayCounter = 1;

  for (let i = 0; i < 42; i++) {
    // Créer un élément div pour chaque jour du mois
    const dayCell = document.createElement('div');
    calendar.appendChild(dayCell);

    if (i >= startOffset && dayCounter <= daysInMonth) {
      dayCell.textContent = dayCounter;
      if (currentDate.getMonth() === firstDayOfMonth.getMonth() && dayCounter === currentDate.getDate()) {
        // Ajouter la classe 'today' pour mettre en évidence le jour actuel
        dayCell.classList.add('today');
      }
      dayCounter++;
    }
  }
}

function showPreviousMonth() {
  // Décrémente le mois de currentDate d'une unité pour afficher le mois précédent
  currentDate.setMonth(currentDate.getMonth() - 1);
  // Génère le calendrier mis à jour
  generateCalendar();
}

function showNextMonth() {
  // Incrémente le mois de currentDate d'une unité pour afficher le mois suivant
  currentDate.setMonth(currentDate.getMonth() + 1);
   // Génère le calendrier mis à jour
  generateCalendar();
}

// Appeler la fonction pour générer le calendrier initial
generateCalendar();
