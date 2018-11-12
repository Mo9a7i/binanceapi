<?php
#Get Markets from API in JSON Format
$JSON_BINANCE_MARKETS=file_get_contents("https://www.binance.com/api/v1/ticker/24hr", false);
#Convert JSON to PHP Array for foreach loop
$ARRAY_BINANCE_MARKETS=json_decode($JSON_BINANCE_MARKETS);
#Go through Array in foreach loop
foreach($ARRAY_BINANCE_MARKETS as $MARKET) {
    #Remove last three characters from ticker
    $TICKER = substr($MARKET->symbol, 0, -3); #SO LIKE CLOAK
    $MARKET_BASE = substr($MARKET->symbol, -3); # BTC/ETH etc

    #Print info for BTC markets
    if ($MARKET_BASE == "BTC") {
        echo "Market: ".$TICKER." Last Price: ".$MARKET->lastPrice."\n\r";
    }
}

?>
