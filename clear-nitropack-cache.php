<?php
// Remplacez par votre clé API NitroPack
$api_key = 'YOUR_API_KEY';
$domain_id = 'YOUR_DOMAIN_ID';

// URL de l'API NitroPack pour purger le cache
$url = 'https://api.nitropack.io/v1/cache/flush';

// Données à envoyer pour purger le cache
$data = array(
    'api_key' => $api_key,
    'domain_id' => $domain_id
);

// Initialiser la requête cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Exécuter la requête et récupérer la réponse
$response = curl_exec($ch);
curl_close($ch);

// Vérifier la réponse
if ($response === false) {
    echo 'Erreur lors de la purge du cache.';
} else {
    echo 'Cache purgé avec succès !';
}
?>
