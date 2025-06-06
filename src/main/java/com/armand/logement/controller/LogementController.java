package com.armand.logement.controller;

import com.armand.logement.model.Logement;
import com.armand.logement.service.LogementService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/logements")
@CrossOrigin
public class LogementController {

    @Autowired
    private LogementService service;

    @PostMapping
    public Logement creer(@RequestBody Logement logement) {
        return service.creer(logement);
    }

    @GetMapping
    public List<Logement> lireTous() {
        return service.lireTous();
    }

    @GetMapping("/{id}")
    public Logement lireParId(@PathVariable Long id) {
        return service.lireParId(id);
    }

    @PutMapping("/{id}")
    public Logement modifier(@PathVariable Long id, @RequestBody Logement logement) {
        return service.modifier(id, logement);
    }

    @DeleteMapping("/{id}")
    public void supprimer(@PathVariable Long id) {
        service.supprimer(id);
    }

    @GetMapping("/type/{type}")
    public List<Logement> parType(@PathVariable String type) {
        return service.parType(type);
    }

    @GetMapping("/loyer-max/{montant}")
    public List<Logement> parLoyer(@PathVariable double montant) {
        return service.parLoyerMax(montant);
    }

    @GetMapping("/disponibles")
    public List<Logement> disponibles() {
        return service.disponibles();
    }
}
