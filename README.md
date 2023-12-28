# Dokumentacja

- **Plik `form.php`**: Plik ten odpowiada za przetwarzanie danych przesłanych z formularza. Dane są walidowane, a następnie dodawane do bazy danych.

- **Tworzenie tabeli `users_data`**:
  Stwórz tabelę `users_data` w bazie danych, aby przechowywać informacje o użytkownikach. Poniżej znajduje się przykładowe polecenie SQL do utworzenia tej tabeli:

  ```sql
  CREATE TABLE users_data (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      instagram VARCHAR(255) NOT NULL,
      followers INT NOT NULL,
      email VARCHAR(255) NOT NULL
  );
