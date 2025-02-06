public class User {
    private String username;
    private String password;

    public User(String username, String password) {
        this.username = username;
        this.password = password;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public boolean validatePassword(String inputPassword) {
        // Aquí se puede implementar la lógica para validar la contraseña
        return this.password.equals(inputPassword);
    }

    // Otros métodos relacionados con la lógica de negocio del usuario pueden ser añadidos aquí
}