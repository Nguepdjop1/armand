package com.armand.logement;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication(scanBasePackages = "com.armand.logement")
public class LogementApplication {

	public static void main(String[] args) {
		SpringApplication.run(LogementApplication.class, args);
	}

}
