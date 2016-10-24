<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Hem',
    'RiskManagement'=>'Riskhantering',
    'Reporting'=>'Rapportering',
    'Configure'=>'Konfigurera',
    'MyProfile'=>'Min Profil',
    'Logout'=>'Logga ut',
    'LogInHere'=>'Logga In Här',
    'Username'=>'Användarnamn',
    'Password'=>'Lösenord',
    'ForgotYourPassword'=>'Har du glömt ditt lösenord',
    'Login'=>'Logga in',
    'Reset'=>'Återställ',
    'Send'=>'Skicka',
    'Update'=>'Uppdatering',
    'SendPasswordResetEmail'=>'Skicka E-Återställning Av Lösenord',
    'PasswordReset'=>'Återställ Lösenord',
    'ResetToken'=>'Återställ Systemnyckel',
    'RepeatPassword'=>'Upprepa Lösenord',
    'Submit'=>'Skicka',
    'ProfileDetails'=>'Profil',
    'LastLogin'=>'Senaste Inloggning',
    'ChangePassword'=>'Ändra Lösenord',
    'CurrentPassword'=>'Nuvarande Lösenord',
    'NewPassword'=>'Nytt Lösenord',
    'ConfirmPassword'=>'Bekräfta Lösenord',
    'ConfigureRiskFormula'=>'Konfigurera Risk Formel',
    'ConfigureReviewSettings'=>'Konfigurera Granska Inställningar',
    'AddAndRemoveValues'=>'Lägga till och ta Bort Värden',
    'UserManagement'=>'Användarhantering',
    'RedefineNamingConventions'=>'Omdefiniera Namnkonventioner',
    'AuditTrail'=>'Audit Trail',
    'Extras'=>'Extramaterial',
    'Announcements'=>'Meddelanden',
    'About'=>'Om',
    'Impact'=>'Effekt',
    'Likelihood'=>'Sannolikheten',
    'MitigationEffort'=>'Begränsning Ansträngning',
    'Change'=>'Ändra',
    'to'=>'till',
    'AddANewUser'=>'Lägg till en Ny Användare',
    'Type'=>'Typ',
    'FullName'=>'Fullständigt Namn',
    'EmailAddress'=>'E-post Adress',
    'Teams'=>'Team(s)',
    'ALL'=>'ALLA',
    'NONE'=>'INGEN',
    'UserResponsibilities'=>'Användarens Ansvar',
    'AbleToSubmitNewRisks'=>'Möjlighet att Lämna in Nya Risker',
    'AbleToModifyExistingRisks'=>'Möjlighet att Modifiera Befintliga Risker',
    'AbleToCloseRisks'=>'Kunna Stänga Risker',
    'AbleToPlanMitigations'=>'Kan Planera Åtgärder',
    'AbleToReviewLowRisks'=>'Kunna Granska Låga Risker',
    'AbleToReviewMediumRisks'=>'Kunna Granska Medium Risker',
    'AbleToReviewHighRisks'=>'Kunna Granska Höga Risker',
    'AllowAccessToConfigureMenu'=>'Tillåt Åtkomst till "Inställningar" - Menyn',
    'MultiFactorAuthentication'=>'Multi-Faktor Autentisering',
    'None'=>'Ingen',
    'Add'=>'Lägg till',
    'ViewDetailsForUser'=>'Visa Information för Användaren',
    'DetailsForUser'=>'Information för Användare',
    'Select'=>'Välj',
    'EnableAndDisableUsers'=>'Aktivera eller Inaktivera Användare',
    'EnableAndDisableUsersHelp'=>'Använd denna funktion för att aktivera eller inaktivera användare inloggningar samtidigt som verifieringskedja av användarens aktiviteter',
    'DisableUser'=>'Inaktivera användare',
    'Disable'=>'Inaktivera',
    'EnableUser'=>'Aktivera användare',
    'Enable'=>'Aktivera',
    'DeleteAnExistingUser'=>'Ta bort en Existerande Användare',
    'DeleteCurrentUser'=>'Radera aktuell användare',
    'Delete'=>'Ta bort',
    'SendPasswordResetEmailForUser'=>'Att skicka lösenord återställa e-post för användare',
    'Category'=>'Kategori',
    'AddNewCategoryNamed'=>'Lägg till ny kategori som heter',
    'DeleteCurrentCategoryNamed'=>'Ta bort aktuell kategori som heter',
    'Team'=>'Team',
    'AddNewTeamNamed'=>'Lägga till nya lag heter',
    'DeleteCurrentTeamNamed'=>'Ta bort nuvarande lag heter',
    'Technology'=>'Teknik',
    'AddNewTechnologyNamed'=>'Lägg till ny teknik som heter',
    'DeleteCurrentTechnologyNamed'=>'Ta bort aktuell teknik som heter',
    'SiteLocation'=>'Plats/Läge',
    'AddNewSiteLocationNamed'=>'Lägg till ny plats/läge som heter',
    'DeleteCurrentSiteLocationNamed'=>'Ta bort aktuell sida/plats som heter',
    'ControlRegulation'=>'Förordningen Om Kontroll',
    'AddNewControlRegulationNamed'=>'Lägg till ny förordning för kontroll heter',
    'DeleteCurrentControlRegulationNamed'=>'Ta bort nuvarande förordning för kontroll heter',
    'RiskPlanningStrategy'=>'Risk Planering Strategi',
    'AddNewRiskPlanningStrategyNamed'=>'Lägg till ny risk planering strategi som heter',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Ta bort aktuell risk planering strategi som heter',
    'CloseReason'=>'Nära Anledning',
    'AddNewCloseReasonNamed'=>'Lägga till nya nära anledning heter',
    'DeleteCurrentCloseReasonNamed'=>'Ta bort aktuell nära anledning heter',
    'IWantToReviewHighRiskEvery'=>'Jag vill granska HÖG risk varje',
    'IWantToReviewMediumRiskEvery'=>'Jag vill granska varje MEDIUM risk',
    'IWantToReviewLowRiskEvery'=>'Jag vill granska LÅG risk varje',
    'days'=>'dagar',
    'MyClassicRiskFormulaIs'=>'Min Klassiska Risk Formel Är',
    'RISK'=>'RISK',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Jag anser att HÖG risk för att vara något större än',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Jag anser MEDIUM risk till att vara mindre än ovan, men större än',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Jag anser att LÅG risk att vara mindre än ovan, men större än',
    'HighRisk'=>'Hög Risk',
    'MediumRisk'=>'Medium Risk',
    'LowRisk'=>'Låg Risk',
    'Irrelevant'=>'Irrelevant',
    'SubmitYourRisks'=>'Skicka In Dina Risker',
    'PlanYourMitigations'=>'Planera Din Mildrande Åtgärder',
    'PerformManagementReviews'=>'Utföra Förvaltning Recensioner',
    'PrioritizeForProjectPlanning'=>'Prioritera för projektplanering',
    'ReviewRisksRegularly'=>'Granska Regelbundet Risker',
    'DocumentANewRisk'=>'Dokument en Ny Risk',
    'UseThisFormHelp'=>'Använd detta formulär för att dokumentera en ny risk för att beaktas inom Risk Management-Process',
    'Subject'=>'Ämne',
    'ExternalReferenceId'=>'Extern Referens-ID',
    'ControlNumber'=>'Kontroll Nummer',
    'Owner'=>'Ägare',
    'OwnersManager'=>'Ägare: s Manager',
    'RiskScoringMethod'=>'Risk Utvärderingsmetoden',
    'CurrentLikelihood'=>'Nuvarande Sannolikheten',
    'CurrentImpact'=>'Aktuell Påverkan',
    'RiskAssessment'=>'Riskbedömning',
    'AdditionalNotes'=>'Ytterligare Anmärkningar',
    'UNREVIEWED'=>'Ej granskad',
    'PASTDUE'=>'TIDIGARE PÅ GRUND AV',
    'ID'=>'ID',
    'Status'=>'Status',
    'Risk'=>'Risk',
    'DaysOpen'=>'Dagar Öppet',
    'CalculatedRisk'=>'Beräknad Risk',
    'SubmittedBy'=>'Inskickad Av',
    'NextReviewDate'=>'Nästa Recension Datum',
    'CVSSRiskScoring'=>'CVSS Risk Poäng',
    'DREADRiskScoring'=>'DREAD Risker Poäng',
    'OWASPRiskScoring'=>'OWASP Risk Poäng',
    'CustomRiskScoring'=>'Egen Risk Poäng',
    'MitigationPlanningHelp'=>'Nedan är en lista över fram risker som kräver lindring planering',
    'ManagementReviewHelp'=>'Nedan är en lista över fram risker som kräver ledningens genomgång',
    'Submitted'=>'Fram',
    'MitigationPlanned'=>'Begränsning Planerade',
    'ManagementReview'=>'Ledningens Genomgång',
    'No'=>'Inga',
    'Yes'=>'Ja',
    'AddAndRemoveProjects'=>'Lägga till och ta Bort Projekt',
    'AddAndRemoveProjectsHelp'=>'Lägga till och ta bort projekt i syfte att knyta flera risker samt för prioritering',
    'AddNewProjectNamed'=>'Lägg till nya projekt som heter',
    'DeleteCurrentProjectNamed'=>'Ta bort nuvarande projekt som heter',
    'AddUnassignedRisksToProjects'=>'Lägg till Unassigned Risker för Projekt',
    'AddUnassignedRisksToProjectsHelp'=>'Dra och släpp unassigned risker som är markerade för att beaktas som ett projekt i lämpliga projekt-fliken',
    'PrioritizeProjects'=>'Att Prioritera Projekt',
    'PrioritizeProjectsHelp'=>'Flytta projekt runt och ändra ordningen för prioritering. När du är klar, glöm inte att trycka på knappen "Uppdatera" för att spara dina ändringar',
    'SaveRisksToProjects'=>'Spara Risker för Projekt',
    'RiskId'=>'Risk-ID',
    'RiskActions'=>'Risken Åtgärder',
    'ReopenRisk'=>'Öppna Risk',
    'CloseRisk'=>'Stäng Risk',
    'EditRisk'=>'Redigera Risk',
    'PlanAMitigation'=>'Planera en Begränsning',
    'PerformAReview'=>'Utföra en Recension',
    'AddAComment'=>'Lägg till en Kommentar',
    'ShowRiskScoringDetails'=>'Visa Risk Scoring Detaljer',
    'HideRiskScoringDetails'=>'Dölj Risk Scoring Detaljer',
    'Details'=>'Detaljer',
    'SubmissionDate'=>'Inlämningsdatum',
    'DateSubmitted'=>'Framläggande',
    'EditDetails'=>'Ändra Uppgifter',
    'Mitigation'=>'Begränsning',
    'MitigationDate'=>'Begränsning Datum',
    'PlanningStrategy'=>'Planering Strategi',
    'CurrentSolution'=>'Nuvarande Lösning',
    'SecurityRequirements'=>'Krav På Säkerhet',
    'SecurityRecommendations'=>'Säkerhet Rekommendationer',
    'EditMitigation'=>'Redigera Begränsning',
    'LastReview'=>'Förra Granskningen',
    'ReviewDate'=>'Recension Datum',
    'Reviewer'=>'Recensent',
    'Review'=>'Recension',
    'NextStep'=>'Nästa Steg',
    'Comments'=>'Kommentarer',
    'ViewAllReviews'=>'Visa Alla Recensioner',
    'ReviewHistory'=>'Översyn Historia',
    'Comment'=>'Kommentar',
    'ClassicRiskScoring'=>'Klassiska Risk Poäng',
    'RiskScoringActions'=>'Risk Poäng Åtgärder',
    'UpdateClassicScore'=>'Uppdatera Klassiska Betyg',
    'ScoreBy'=>'Värdering av',
    'RISKClassicExp1'=>'RISK = ( Sannolikhet x Påverkan + 2(Påverkan) )',
    'RISKClassicExp2'=>'RISK = ( Sannolikhet x Påverkan + Effekt )',
    'RISKClassicExp3'=>'RISK = ( Sannolikhet x Påverkan )',
    'RISKClassicExp4'=>'RISK = ( Sannolikhet x Påverkan + Sannolikheten )',
    'RISKClassicExp5'=>'RISK = ( Sannolikhet x Påverkan + 2(Sannolikheten) )',
    'Reason'=>'Skäl',
    'CloseOutInformation'=>'Close-Out Information',
    'SubmitManagementReview'=>'Skicka In Management Review',
    'SubmitRiskMitigation'=>'Skicka Riskreducerande',
    'RiskDashboard'=>'Risk Dashboard',
    'RiskTrend'=>'Risk Trend',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Alla Öppna Risker som Tilldelats Mig av Risk-Nivå',
    'AllOpenRisksByRiskLevel'=>'Alla Öppna Risker genom att risknivån',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Alla Öppna Riskerna Anses vara för Projekt av Risk-Nivå',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Alla Öppna Risker Accepteras Fram till Nästa Översyn av Risk-Nivå',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Alla Öppna Risker för att Lämna en Produktion Fråga med Risk Nivå',
    'AllOpenRisksByScoringMethod'=>'Alla Öppna Risker genom att Scoring Metoden',
    'AllClosedRisksByRiskLevel'=>'Stängt alla Risker i Risk-Nivå',
    'SubmittedRisksByDate'=>'Fram Risker Genom Datum',
    'MitigationsByDate'=>'Begränsande Faktorer Av Datum',
    'ManagementReviewsByDate'=>'Ledningens Genomgång Av Dagen',
    'ProjectsAndRisksAssigned'=>'Projekt och Risker som Tilldelats',
    'OpenRisks'=>'Öppna Risker',
    'ClosedRisks'=>'Stängt Risker',
    'ReportMyOpenHelp'=>'Denna rapport visar alla öppna risker som den aktuella användaren som ägare eller förvaltare som är förknippade med den risk som beställts av risk-nivå',
    'ReportOpenHelp'=>'Denna rapport visar alla öppna risker som beställts av risk-nivå',
    'ReportProjectsHelp'=>'Denna rapport visar alla öppna riskerna anses vara för projekt beställt av risk-nivå',
    'ReportNextReviewHelp'=>'Denna rapport visar alla öppna risker accepteras fram till nästa översyn beställt av risk-nivå',
    'ReportProductionIssuesHelp'=>'Denna rapport visar alla öppna risker som lämnats som produktionen frågor som beställts av risk-nivå',
    'ReportRiskScoringHelp'=>'Denna rapport visar alla risker poäng metoder och de risker som fått hjälp av varje',
    'ReportClosedHelp'=>'Denna rapport visar alla stängt risker som beställts av risk-nivå',
    'ReportSubmittedByDateHelp'=>'Denna rapport visar alla risker som beställts av inlämningsdatumet',
    'ReportMitigationsByDateHelp'=>'Denna rapport visar alla mildrande åtgärder som planeras beställas genom begränsning datum',
    'ReportMgmtReviewsByDateHelp'=>'Denna rapport visar alla förvaltning recensioner beställas genom att granska datum',
    'ReportProjectsAndRisksHelp'=>'Denna rapport visar alla projekt och de risker som tilldelats dem',
    'Language'=>'Språk',
    'AllOpenRisksNeedingReview'=>'Alla Öppna Risker som Behöver en Recension',
    'ReportReviewNeededHelp'=>'Denna rapport visar alla öppna risker som behöver en översyn av hanteringen',
    'CustomValue'=>'Anpassat Värde',
    'ClosedRisksByDate'=>'Stängt Risker Genom Datum',
    'DateClosed'=>'Datum Stängd',
    'ClosedBy'=>'Stängt Av',
    'ReportClosedByDateHelp'=>'Denna rapport visar alla risker som beställts av datum för avslutande',
    'AllOpenRisksByTeam'=>'Alla Öppna Risker med Team',
    'ReportRiskTeamsHelp'=>'Denna rapport visar alla lag och de risker som är tilldelade till varje',
    'Unassigned'=>'Unassigned',
    'AllOpenRisksByTechnology'=>'Alla Öppna Risker Genom Teknik',
    'ReportRiskTechnologiesHelp'=>'Denna rapport visar alla tekniker och de risker som är tilldelade till varje',
    'RiskLevel'=>'Risk-Nivå',
    'BasedOnTheCurrentRiskScore'=>'Baserat på den aktuella risken betyg, nästa översyn datum kommer att vara ',
    'WouldYouLikeToUseADifferentDate'=>'Skulle du vilja använda ett annat datum i stället?',
    'RisksOpenedAndClosedOverTime'=>'Risker Öppnas och stängs Över Tid',
    'AllRiskScoresAreAdjusted'=>'All risk poäng justeras för att passa på en skala från 0-10.',
    'DetermineProjectStatus'=>'Avgöra Status I Projektet',
    'ProjectStatusHelp'=>'Plats projekt i segment baserat på deras nuvarande status.',
    'ActiveProjects'=>'Aktiva Projekt',
    'OnHoldProjects'=>'På Håll-Projekt',
    'CompletedProjects'=>'Avslutade Projekt',
    'CancelledProjects'=>'Avvecklade Projekt',
    'UpdateProjectStatuses'=>'Uppdatera Projektets Status',
    'HighRiskReport'=>'Hög Risk Rapport',
    'TotalOpenRisks'=>'Totalt Öppna Risker',
    'TotalHighRisks'=>'Totalt Höga Risker',
    'HighRiskPercentage'=>'Hög Risk Procent',
    'UpdateClassicScore'=>'Uppdatera Klassiska Betyg',
    'CurrentLikelihood'=>'Nuvarande Sannolikheten',
    'CurrentImpact'=>'Aktuell Påverkan',   
    'UpdateCVSSScore'=>'Uppdatering CVSS Betyg',
    'BaseScoreMetrics'=>'Poäng Statistik',
    'AttackVector'=>'Angreppspunkten',
    'AttackComplexity'=>'Attack Komplexitet',
    'Authentication'=>'Autentisering',
    'ConfidentialityImpact'=>'Sekretess Effekt',
    'IntegrityImpact'=>'Integritet Effekt',
    'AvailabilityImpact'=>'Tillgänglighet Påverkan',
    'TemporalScoreMetrics'=>'Temporal Betyg Statistik',
    'Exploitability'=>'Driftstekniska',
    'RemediationLevel'=>'Sanering Nivå',
    'ReportConfidence'=>'Rapport Förtroende',
    'EnvironmentalScoreMetrics'=>'Miljö Betyg Statistik',
    'CollateralDamagePotential'=>'Oavsiktliga Skador Potential',
    'TargetDistribution'=>'Målet Distribution',
    'ConfidentialityRequirement'=>'Sekretessen',
    'IntegrityRequirement'=>'Integritet Krav',
    'AvailabilityRequirement'=>'Tillgänglighet Krav',
    'UpdateDREADScore'=>'Uppdatering FRUKTAR Betyg',
    'DamagePotential'=>'Skadepotential',
    'Reproducibility'=>'Reproducerbarhet',
    'AffectedUsers'=>'Användare Som Påverkas',
    'Discoverability'=>'Upptäckbarheten',
    'UpdateOWASPScore'=>'Uppdatering OWASP Betyg',
    'ThreatAgentFactors'=>'Hot Agent Faktorer',
    'SkillLevel'=>'Skicklighet Nivå',
    'Motive'=>'Motiv',
    'Opportunity'=>'Tillfälle',
    'Size'=>'Storlek',
    'VulnerabilityFactors'=>'Faktorer',
    'EaseOfDiscovery'=>'Enkel Upptäckt',
    'EaseOfExploit'=>'Enkel Utnyttja',
    'Awareness'=>'Medvetenhet',
    'IntrusionDetection'=>'Intrusion Detection',
    'TechnicalImpact'=>'Teknisk Effekt',
    'LossOfConfidentiality'=>'Förlust av Sekretess',
    'LossOfIntegrity'=>'Förlust av Integritet',
    'LossOfAvailability'=>'Förlust av Tillgänglighet',
    'LossOfAccountability'=>'Förlust av Ansvarsskyldighet',
    'BusinessImpact'=>'Konsekvenser För Företagen',
    'FinancialDamage'=>'Ekonomisk Skada',
    'ReputationDamage'=>'Rykte Skada',
    'NonCompliance'=>'Icke-Överensstämmelse',
    'PrivacyViolation'=>'Sekretess Brott',
    'UpdateCustomScore'=>'Uppdatera Egna Betyg',
    'ManuallyEnteredValue'=>'Manuellt Inmatade Värdet',
    'ScoreByClassic'=>'Värdering av Klassiska',
    'ScoreByCVSS'=>'Värdering av CVSS',
    'ScoreByDREAD'=>'Värdering av SKRÄCK',
    'ScoreByOWASP'=>'Värdering av OWASP',
    'ScoreByCustom'=>'Värdering av Egna',
    'BaseVector'=>'Basvektorn',
    'TemporalVector'=>'Temporal Vektor',
    'EnvironmentalVector'=>'Miljö-Vektor',
    'SupportingDocumentation'=>'Stödjande Dokumentation.',
    'Import'=>'Importera',
    'Export'=>'Export',
    'ActivateTheImportExportExtra'=>'Aktivera Import/Export Extra',
    'PrintableView'=>'Utskrivbar Vy',
    'GroupBy'=>'Gruppen Av',
    'IncludedColumns'=>'Ingår Kolumner',
    'AllRisks'=>'Alla Risker',
    'DynamicRiskReport'=>'Dynamisk Riskrapport',
    'ObsoleteReports'=>'Föråldrade Rapporter',
    'Project'=>'Projektet',
    'SortBy'=>'Sortera Efter',
    'MonthSubmitted'=>'Månad Fram',
    'AssetManagement'=>'Asset Management',
    'AutomatedDiscovery'=>'Automatisk Upptäckt',
    'BatchImport'=>'Batch Import',
    'ManageAssets'=>'Hantera Tillgångar',
    'AssetValuation'=>'Värdering Av Tillgångar',
    'AllowAccessToAssetManagementMenu'=>'Tillåt Åtkomst till "Asset Management" - Menyn',
    'AutomatedDiscoveryHelp'=>'Upptäck allt levande IP-adresser i den angivna IP-intervall. Live IP-adresser kommer att läggas till i inventarieförteckningen. Stödjer formaten:',
    'IPRange'=>'IP-Intervall',
    'Search'=>'Sök',
    'AddANewAsset'=>'Lägga till en Ny Tillgång',
    'DeleteAnExistingAsset'=>'Ta bort en Existerande Tillgångar',
    'AssetName'=>'Tillgång Namn',
    'IPAddress'=>'IP-Adress',
    'AssetWasAddedSuccessfully'=>'Tillgång lagts till.',
    'AssetWasDeletedSuccessfully'=>'Tillgången var raderad.',
    'ThereWasAProblemAddingTheAsset'=>'Det var ett problem att lägga tillgången.',
    'ThereWasAProblemDeletingTheAsset'=>'Det var ett problem att ta bort tillgången.',
    'ComingSoon'=>'Kommer Snart',
    'ExportRisks'=>'Export Risker',
    'ExportMitigations'=>'Export-Mildrande Åtgärder',
    'ExportReviews'=>'Export Recensioner',
    'ExportCombined'=>'Export I Kombination',
    'MitigatedBy'=>'Mildras Genom Att',
    'MitigationId'=>'Begränsning ID',
    'ReviewId'=>'Översyn ID',
    'AffectedAssets'=>'Påverkas Tillgångar',
    'Activate'=>'Aktivera',
    'DeleteRisks'=>'Ta Bort Risker',
    'DeletedRisksCannotBeRecovered'=>'Utgå Risker Som Inte Kan Återvinnas',
    'RisksDeletedSuccessfully'=>'Risk(s) Raderad',
    'ThereWasAProblemDeletingTheRisk'=>'Det Var ett Problem att ta Bort Risken(s)',
    'Activated'=>'AKTIVERAD',
    'IWantToReviewInsignificantRiskEvery'=>'Jag vill granska OBETYDLIG risk varje',
    'Insignificant'=>'Obetydlig',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Jag betraktar som MYCKET HÖG risk för att vara något större än',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Jag anser att HÖG risk för att vara mindre än ovan, men större än',
    'VeryHigh'=>'Mycket Hög',
    'VeryHighRisk'=>'Mycket Hög Risk',
    'IWantToReviewVeryHighRiskEvery'=> 'Jag vill att granska en MYCKET HÖG risk varje',
    'AbleToReviewVeryHighRisks'=>'Kunna Granska en Mycket Hög risk',
    'AbleToReviewInsignificantRisks'=>'Kunna Granska Obetydliga Risker',
    'TotalVeryHighRisks'=>'Totalt Mycket Höga Risker',
    'VeryHighRiskPercentage'=>'Mycket Hög Risk Procent',
    'AllTeams'=>'Alla Lag',
    'FileUploadSettings'=>'Ladda Upp Fil Inställningar',
    'AllowedFileTypes'=>'Tillåtna Filtyper',
    'AddNewFileTypeOf'=>'Lägg till en ny fil typ av',
    'DeleteCurrentFileTypeOf'=>'Ta bort aktuell typ av fil',
    'MaximumUploadFileSize'=>'Ladda Upp Fil-Storlek',
    'Bytes'=>'Byte',
    'CheckAll'=>'Kontrollera Alla',
    'CheckAllRiskMgmt'=>'Kontrollera Alla Riskhantering',
    'CheckAllAssetMgmt'=>'Kontrollera Alla Asset Management',
    'CheckAllConfigure'=>'Kontrollera Alla Konfigurera',
    'MitigationTeam'=>'Begränsning Team',
    'ImportRisks'=>'Importera Risker',
    'ImportAssets'=>'Importera Tillgångar',
    'AssetValue'=>'Substansvärde',
    'Register'=>'Registrera dig',
    'RegisterSimpleRisk'=>'Registrera SimpleRisk',
    'RegistrationText'=>'Genom att registrera SimpleRisk kommer du att kunna ge dina kontaktuppgifter, så att du kan vara uppdaterad med den senaste informationen och viktiga säkerhetsmeddelanden. Din information kommer inte att säljas till en tredje part. Registrerade fall också har förmågan att backas upp och uppgraderas med en knapptryckning.',
    'RegistrationInformation'=>'Registrering Information',
    'Company'=>'Företaget',
    'JobTitle'=>'Titel',
    'Phone'=>'Telefon',
    'UpgradeSimpleRisk'=>'Uppgradera SimpleRisk',
    'UpgradeInstructions'=>'Detta avsnitt använder Uppgraderingen Extra. Se till att du har den senaste versionen, välj "Update", registrera och uppdatera den här sidan.',
    'NoUpgradeNeeded'=>'Ingen uppgradering behövs vid denna tid.',
    'BackupDatabase'=>'Backup av Databas',
    'UpgradeApplication'=>'Uppgradera Programmet',
    'UpgradeDatabase'=>'Uppgradera Databasen',
    'CustomExtras'=>'Anpassad Extra',
    'CustomExtrasText'=>'Det skulle vara awesome om allt var gratis, eller hur? Förhoppningsvis kärnan SimpleRisk plattform kan tjäna alla dina risk management. Men, om du befinner dig fortfarande vill ha mer funktionalitet, har vi utvecklat en serie "Extras" som kommer att göra just det.',
    'Upgrade'=>'Uppgradera',
    'Install'=>'Installera',
    'Purchase'=>'Köp',
    'PasswordPolicy'=>'Lösenord',
    'MinimumNumberOfCharacters'=>'Minsta Antal Tecken',
    'RequireAlphaCharacter'=>'Kräver Alpha-Tecken',
    'RequireUpperCaseCharacter'=>'Kräver Versal',
    'RequireLowerCaseCharacter'=>'Kräver Bokstav',
    'RequireNumericCharacter'=>'Kräver Numeriska Tecken',
    'RequireSpecialCharacter'=>'Kräver Speciella Karaktär',
    'Enabled'=>'Aktiverad',
    'RiskPyramid'=>'Risk Pyramid',
    'RiskPyramidDescription'=>'Risken pyramiden ovan hjälper till att visa på fördelningen av risker mellan olika risknivåer. En tunga pyramid kan vara ett tecken på att din organisation tar på sig för mycket risk.',
    'RiskAdvice'=>'Risk Råd',
    'AddDeleteAssets'=>'Lägg Till & Ta Bort Tillgångar',
    'EditAssets'=>'Redigera Tillgångar',
    'AutomaticAssetValuation'=>'Automatisk Värdering Av Tillgångar',
    'ManualAssetValuation'=>'Manuell Värdering Av Tillgångar',
    'MinimumValue'=>'Minsta Värde',
    'MaximumValue'=>'Högsta Värde',
    'ValueRange'=>'Värde Sortiment',
    'DefaultAssetValuation'=>'Standard För Värdering Av Tillgångar',
    'Default'=>'Standard',
    'RisksAndAssets'=>'Risker och Tillgångar',
    'Report'=>'Rapport',
    'RisksByAsset'=>'Risker av Tillgång',
    'AssetsByRisk'=>'Tillgångar med Risk',
    'MaximumQuantitativeLoss'=>'Maximal Kvantitativa Förlust',
    'MitigationOwner'=>'Begränsning Ägare',
    'MitigationCost'=>'Begränsning Kostnaden',
    'RiskColumns'=>'Risk Kolumner',
    'MitigationColumns'=>'Begränsning Kolumner',
    'ReviewColumns'=>'Granska Kolumner',
    'ChangeStatus'=>'Ändra Status',
    'SetRiskStatusTo'=>'Ställ Risk Status',
    'AddNewStatusNamed'=>'Lägg till ny status som heter',
    'DeleteStatusNamed'=>'Ta bort status som heter',
    'DefaultCurrencySymbol'=>'Standard Valuta Symbol',
    'DefaultValues'=>'Standardvärden',
    'RiskSource'=>'Risk Källa',
    'AddNewSourceNamed'=>'Lägg till ny källa som heter',
    'DeleteSourceNamed'=>'Ta bort källan heter',
    'CheckAllAssessments'=>'Kontrollera Alla Bedömningar',
    'AllowAccessToAssessmentsMenu'=>'Tillåt Åtkomst till "Bedömningar" - Menyn',
    'Assessments'=>'Bedömningar',
    'AvailableAssessments'=>'Tillgängliga Bedömningar',
    'PendingRisks'=>'I Avvaktan Risker',
    'CreateAssessment'=>'Skapa Bedömning',
    'EditAssessment'=>'Redigera Bedömning',
    'Overview'=>'Översikt',
    'OpenVsClosed'=>'Öppna vs Stängt',
    'MitigatedVsUnmitigated'=>'Mildras vs Renodlad',
    'ReviewedVsUnreviewed'=>'Omdömet vs ej granskad',
    'OpenedRisks'=>'Öppnade Risker',
    'MailSettings'=>'E-Post Inställningar',
    'TransportAgent'=>'Transport Agent',
    'FromName'=>'Från Namn',
    'FromEmail'=>'Från E-Post',
    'ReplyToName'=>'ReplyTo Namn',
    'ReplyToEmail'=>'ReplyTo E-Post',
    'Host'=>'Värd',
    'SMTPAuthentication'=>'SMTP-Autentisering',
    'Encryption'=>'Kryptering',
    'Port'=>'Port',
    'Next'=>'Nästa',
    'NewAssessmentQuestion'=>'Ny Bedömning Fråga',
    'Question'=>'Fråga',
    'RiskScore'=>'Risken Betyg',
    'SubmitRisk'=>'Lämna Risk',
    'Answer'=>'Svara',
    'AddQuestion'=>'Lägg Fråga',
    'SaveAssessment'=>'Spara Bedömning',
    'SendAssessment'=>'Skicka Bedömning',
    'DeleteAssessment'=>'Ta Bort Bedömning',
    'AssessmentName'=>'Bedömning Namn',
    'SendTo'=>'Skicka Till',
    'ActiveAssessments'=>'Aktiva Bedömningar',
    'SentTo'=>'Skickas Till',
    'From'=>'Från',
    'Key'=>'Nyckel',
    'GoToSSOLoginPage'=>'Gå till SSO Inloggningssida ',
    'APIKey'=>'API Nyckel',
    'GenerateAPIKey'=>'Generera API Nyckel',
    'RotateAPIKey'=>'Rotera API Nyckel',
    'InvalidateAPIKey'=>'Ogiltiggör API Nyckel',
    'Deactivate'=>'Avaktivera',
    'ImportExportExtra'=>'Import-Export Extra',
    'SaveDetails'=>'Spara Detaljer',
    'ClearForm'=>'Rensa Formulär',
    'SaveMitigation'=>'Spara Mitigation',
    'Cancel'=>'Annullera',
    'SubmitReview'=>'Bedöm',
    'UnassignedRisks'=>'Otilldelade Risker',
    'DisableRegistrationNotice'=>'Inaktivera Registrering Observera',
    ''=>'',
);

?>
