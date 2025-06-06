package com.armand.logement.service;

import com.armand.logement.model.Logement;
import com.armand.logement.repository.LogementRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class LogementServiceImpl implements LogementService {

    @Autowired
    private LogementRepository repo;

    public Logement creer(Logement logement) {
        return repo.save(logement);
    }

    public List<Logement> lireTous() {
        return repo.findAll();
    }

    public Logement lireParId(Long id) {
        return repo.findById(id).orElse(null);
    }

    public Logement modifier(Long id, Logement logement) {
        Logement existant = lireParId(id);
        if (existant != null) {
            existant.setAdresse(logement.getAdresse());
            existant.setLoyer(logement.getLoyer());
            existant.setType(logement.getType());
            existant.setDisponible(logement.isDisponible());
            return repo.save(existant);
        }
        return null;
    }

    public void supprimer(Long id) {
        repo.deleteById(id);
    }

    public List<Logement> parType(String type) {
        return repo.findByType(type);
    }

    public List<Logement> parLoyerMax(double montant) {
        return repo.findByLoyerLessThanEqual(montant);
    }

    public List<Logement> disponibles() {
        return repo.findByDisponibleTrue();
    }
}
