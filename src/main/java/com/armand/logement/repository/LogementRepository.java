package com.armand.logement.repository;

import com.armand.logement.model.Logement;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface LogementRepository extends JpaRepository<Logement, Long> {
    List<Logement> findByType(String type);
    List<Logement> findByLoyerLessThanEqual(double montant);
    List<Logement> findByDisponibleTrue();
}
