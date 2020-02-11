$response = Invoke-RestMethod 'https://conectame.ddns.net/rest/api.php?m=curp&user=prueba&pass=sC%7D9pW1Q%5Dc&val=FOQV420702HDFXSC07' -Method 'GET' -Headers $headers -Body $body
$response | ConvertTo-Json
Start-Sleep -s 10