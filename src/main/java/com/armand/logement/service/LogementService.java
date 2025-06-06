package com.armand.logement.service;

import com.armand.logement.model.Logement;
import java.util.List;

public interface LogementService {
    Logement creer(Logement logement);
    List<Logement> lireTous();
    Logement lireParId(Long id);
    Logement modifier(Long id, Logement logement);
    void supprimer(Long id);

    List<Logement> parType(String type);
    List<Logement> parLoyerMax(double montant);
    List<Logement> disponibles();
}
