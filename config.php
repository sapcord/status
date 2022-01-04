<?php
//GŁÓWNE

$name = ''; //Własna nazwa Twojego serwera Minecraft
$logo = ''; //Adres URL do loga strony internetowej, gdy nic tutaj nie podasz domyślnie będzie ustawione logo SAPCord.
$url_www = 'http://127.0.0.1'; //Adres URL na którym znajduję się strona internetowa, jeśli masz tylko jedną stronę internetową na swojej maszynie możesz użyć lokalnego URL czyli http://127.0.0.1, aby przyśpieszyć szybkość pobierania statusu.
$address_query_status = '127.0.0.1'; //Adres IP serwera Minecraft
$port_query_status = '25565'; //Port query serwera Minecraft (upewnij się, że na Twoim serwerze jest włączony query). Domyślnie query jest ustawiony na port 25565, możesz go zmienić w server.properties, aby dokladny status serwera był bardziej bezpieczny i mniej dostępny dla 'hackerów'.

//KONFIGURACYJNE

$show_status = 'true'; //true - Pokazuje informacje o statusie serwera na stronie internetowej, false - Nie pokazuje informacji o statusie serwera na stronie internetowej
$show_players_max = 'true'; //true - Pokazuje informacje o maksymalnej ilości graczy na stronie internetowej, false - Nie pokazuje informacji o maksymalnej ilości graczy na stronie internetowej
$show_players_online = 'true'; //true - Pokazuje informacje o ilości dostępnych graczy na stronie internetowej, false - Nie pokazuje informacji o ilości dostępnych graczy na stronie internetowej
$show_players_list = 'true'; //true - Pokazuje listę dostępnych graczy na stronie internetowej, false - Nie pokazuje listy dostępnych graczy na stronie internetowej
$show_version = 'true'; //true - Pokazuje informacje o wersji serwera na stronie internetowej, false - Nie pokazuje informacji o wersji serwera na stronie internetowej

//PROTIP: Lista dostępnych graczy nie wyświetla się na stronie internetowej, gdy nikogo nie ma na serwerze.
?>