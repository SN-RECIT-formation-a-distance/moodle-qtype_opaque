<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_opaque', language 'fr_CA', branch 'MOODLE_3.X_STABLE'
 *
 * @package   qtype_opaque
 * @copyright 2006 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accessoutofsequence'] = "Mauvais accès à cette page. Ne pas utiliser le bouton de retour en arrière lorsque vous répondez à cette question.";
$string['addengine'] = "Ajouter un autre engin";
$string['cannotaccessfile'] = "Vous n'avez pas l'autorisation d'accès au fichier.";
$string['configuredquestionengines'] = "Configurez l'engin de question";
$string['configuredquestionengines_help'] = "Opaque est une façon de connecter d'autres engin de questions à Moodle. Pour que Moodle utilise un autre engin de questions, il doit être configuré ici. Ici se trouve la liste de tous les engins de questions qui on été configurés. Vous pouvez les éditer, supprimer ou en créer de nouveaux.";
$string['couldnotconnect'] = 'Impossible de se connecter au serveur opaque {$a}.';
$string['couldnotgetengineinfo'] = 'Impossible d\'obtenir les information du serveur distant pour l\engin d\'ID {$a}.';
$string['couldnotgetquestionmetadata'] = 'L\'engin de questions n\'a pas été en mesure de retourner le score maximal pour la question. Êtes vous sur que les ID et version distantes sont correctes? (Information technique: {$a})';
$string['couldnotloadenginename'] = 'Impossible de charger le nom de l\'engin de la base de données pour l\'engin d\'ID {$a}.';
$string['couldnotloadengineservers'] = 'Impossible de charger la liste des servers de la base de données pour l\'engin d\'ID {$a}.';
$string['couldnotsaveengineinfo'] = " Impossible d'enregistrer les details de l'engin de question dans la base de données.";
$string['deleteconfigareyousure'] = 'Êtes vous sur que vous voulez supprimer la configuration de l\'engin {$a}?';
$string['deletefailed'] = "Erreur lors de la suppression de la configuration de l'engin.";
$string['editquestionengine'] = "Modification de la configuration de l'engin de question Opaque";
$string['editquestionengine_help'] = "Tout les systèmes distants que vous configurez doivent avoir un nom qui sera utilisé pour les identifier dans Moodle. Vous devez spécifier au moins un URL d'engin de questions. Vous pouvez aussi donner des URL de banques de questions spécifiques si votre engin de questions distant utilise des banques de question séparées. Vous pouvez spécifier plusieurs URL par ligne.";
$string['editquestionengineshort'] = "Modification de l'engin";
$string['endingquestionsolution'] = "Montrer la solution après le test";
$string['endingquestionsolution_help'] = "Détermine si vous voulez montrer la solution une fois le test terminé.";
$string['enginecannotbedeleted'] = "Cet engin ne peut-être supprimé car il est utilisé par des questions.";
$string['enginedeleted'] = "Configuration de l'engin supprimée.";
$string['enginename'] = "Nom de l'engin";
$string['enginenotused'] = '{$a->name} (Non utilisé)';
$string['engineusedby'] = '{$a->name} (Utilisé par {$a->count} questions)';
$string['eventengine_created'] = "Configuration de l'engin de questions créée";
$string['eventengine_deleted'] = "Configuration de l'engin de question supprimée";
$string['eventengine_edited'] = "Configuration de l'engin de questions modifiée";
$string['getmetadatacallfailed'] = "Impossible de trouver les metadonnée pour cette question.  Êtes vous sur que l'ID et la version son correct?";
$string['invalidmaxnumattemptsyntax'] = "Ceci ne respecte pas la syntaxe pour le nombre maximum de tentatives permises";
$string['invalidquestionidsyntax'] = "Ceci ne respecte pas la syntaxe pour l'ID de question";
$string['invalidquestionversionsyntax'] = "La version de question devrait être de la forme major.minor, où major et minor sont des entiers.";
$string['invalidquestionhintsyntax'] = "Ceci ne respecte pas la syntaxe pour l'indice";
$string['invalidquestionsolutionsyntax'] = "Ceci ne respecte pas la syntaxe pour la solution";
$string['invalidendingquestionsolutionsyntax'] = "Ceci ne respecte pas la syntaxe pour la solution affichée après la fin du test";
$string['invalidmodeexamsyntax'] = "Ceci ne respecte pas la syntaxe pour le mode examen";
$string['managequestionengines'] = "Gérer la liste d'engins de questions.";
$string['maxgradenotreturned'] = "L'engin de questions n'a pas été en mesure de retourner le score maximale pour cette question. Êtes vous sur que l'ID et la version sont correctes?";
$string['maxnumattempt'] = "Nombre de tentatives avant que la question soit verrouillée (aucune solution affichée)";
$string['maxnumattempt_help'] = "Indiquer le nombre de tentatives avant que la question soit verrouillée. O signie une infinité de tentatives permises";
$string['missingenginedetailsinimport'] = "Manque d'informations lors de l'importation de la question Opaque.";
$string['missingenginename'] = "Nom d'engin non spécifié";
$string['missingengineurls'] = "URL de l'engin de question non spécifié";
$string['missingexammodeinimport'] = "État du mode examen non spécifié";
$string['missingnumattemptlockinimport'] = "Nombre de tentatives avant de verrouiller la question non spécifié";
$string['missingremoteidinimport'] = "Id distante du fichier d'importation non spécifié.";
$string['missingremoteversioninimport'] = "Version distante du fichier d'importation non spécifié.";
$string['missingshowhintafterinimport'] = "Affichage de l'indice non spécifié. Utilisez 0 pour aucun indice.";
$string['missingshowsolutionafterinimport'] = "Affichage de la solution non spécifié. Utilisez 0 pour aucune solution.";
$string['missingshowsolutionaftertestinimport'] = "Affichage de la solution après le test non spécifié.";
$string['modeexam'] = "Mode examen";
$string['modeexam_help'] = "Détermine si la question est en mode examen (aucun résultat affiché dans le tableau de rétrocation).";
$string['noengines'] = "Il n'y a pas d'engin distant copnfiguré pour le moment.";
$string['notcompleted'] = "[Non complété]";
$string['onequestionperpage'] = "Pour des raisons techniques, la question ne peut-être affiché pour le moment. (Seulement une question de ce type peut être affiché à l'écran) Utilsez le panneau de navigation pour revoir une question à la fois.";
$string['pluginname'] = "Opaque";
$string['pluginname_help'] = "Ceci permet d'identifier une question qui sera utilisez par l'engin de questions Opaque.";
$string['pluginnameadding'] = "Ajout d'une question Opaque";
$string['pluginnameediting'] = "Modification d'une question Opaque";
$string['pluginnamesummary'] = "Utilise une question qui provient d'un autre engin de questions.";
$string['passkey'] = "Pass key";
$string['passkey_help'] = "Une pass key est une mesure de sécurité que certains engin utilise. Elle est nécessaire pour ce connecter à un engin qui l'utilise.";
$string['pluginname'] = "Opaque";
$string['processcallfailed'] = 'Impossible de traiter la réponse {$a}';
$string['questionbankurls'] = "URL de la banque de questions";
$string['questionengineurls'] = "URL de l'engin de questions";
$string['questionengine'] = "Engin de questions";
$string['questionengine_help'] = "Choisir l'engin de questions distant qui héberge la question que vous désirez utiliser";
$string['questionid'] = "ID de la question";
$string['questionid_help'] = "Les questions Opaque sont identifées par un ID et une version de question. Le programmeur de la question doit fournir ces informations.";
$string['questionversion'] = "Version de la question";
$string['questionhint'] = "Nombre de tentatives avant d'afficher l'indice. ";
$string['questionhint_help'] = "Indiquer le nombre de tentatives avant d'afficher l'indice (1 à 99). Utilisez 0 pour ne pas afficher l'indice. À partir de 100, l'indice s'affiche à la première tentative";
$string['questionsolution'] = "Nombre de tentatives avant de verrouiller la question (solution affichée)";
$string['questionsolution_help'] = "Indiquer le nombre de tentatives avant de verrouiler la question et afficher la solution (1 à 99). Utilisez 0 pour ne pas afficher la solution. À partir de 100, la solution s'affiche à la première tentative";
$string['startcallfailed'] = 'Impossible de démarrer la question. {$a}';
$string['stopcallfailed'] = 'Impossible de fermer la question. {$a}';
$string['testconnection'] = "Test de la connexion";
$string['testconnectionfailed'] = "Échec du test de connexion";
$string['testconnectionpassed'] = "Test de connexion résussi";
$string['testconnectionto'] = 'Tester la connexion à l\'engin de questions {$a}';
$string['testconnectionunknownreturn'] = "Le test de connexion a retourné une réponse inconnue.";
$string['testingengine'] = "Test de l'engin de questions";
$string['timeout'] = "Délais de connexion expiré (secondes)";
$string['timeout_help'] = "Le délais d'expiration controle le temps alloué à l'engin de questions pour retourner une réponse. Si ce temps est trop court, vous risquez d'obtenir une erreur alors que la question aurait éventuellement été traitée. Un temps trop long risque d'engorger les requêtes s'il y a une erreur avec la question";
$string['timeoutmustbepositive'] = "Le délais d'expiration doit être un entier positif.";
$string['unknownengine'] = 'Engin incconu {$a}';
$string['unrecognisedservertype'] = "Type de serveur incconu dans la base de données.";
$string['urlsinvalid'] = "Vous devez donner une liste d'URL, une URL par ligne";
$string['privacy:metadata'] = "Le plugin Opaque ne sauvegarde aucune information personelle.";
