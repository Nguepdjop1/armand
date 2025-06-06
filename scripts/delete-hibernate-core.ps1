# ===== delete-hibernate-core.ps1 =====

# Dossier cible à supprimer
$targetPath = "C:\Users\nguepdjop\.m2\repository\org\hibernate\orm\hibernate-core"

# ✅ Chemin vers handle.exe (modifié selon ton système)
$handleExe = "C:\Outils\Sysinternals\handle.exe"

# Vérification de la présence de handle.exe
if (!(Test-Path $handleExe)) {
    Write-Host "❌ handle.exe non trouvé à l'emplacement : $handleExe"
    exit 1
}

Write-Host "🔍 Recherche des processus verrouillant des fichiers dans $targetPath..."

# Récupération des handles liés au dossier
$handles = & $handleExe hibernate-core 2>$null

# Extraction des PID
$pids = ($handles | Select-String -Pattern "pid: (\d+)" | ForEach-Object {
    ($_ -match "pid: (\d+)") | Out-Null
        $matches[1]
    }) | Sort-Object -Unique

# Terminaison des processus
foreach ($pid in $pids) {
    Write-Host "💀 Fermeture du processus PID $pid..."
    try {
        Stop-Process -Id $pid -Force -ErrorAction Stop
        Write-Host "✅ Processus $pid terminé."
    }
    catch {
        Write-Host "⚠️ Impossible de terminer le processus $pid : $_"
    }
}

# Pause
Start-Sleep -Seconds 2

# Suppression du dossier
Write-Host "🧹 Suppression du dossier $targetPath..."
try {
    Remove-Item -Recurse -Force $targetPath
    Write-Host "✅ Dossier supprimé avec succès."
}
catch {
    Write-Host "❌ Erreur lors de la suppression : $_"
}
