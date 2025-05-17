import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.*;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;

public class GameManager extends JFrame {
    private static final String FILE_NAME = "games.dat";
    private List<Game> games = new ArrayList<>();
    private JTextField txtType, txtTitle, txtSpecifications;

    public GameManager() {
        // Set up the frame
        setTitle("Game Manager");
        setSize(800, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout());

        // Create a BackgroundPanel with the image
        BackgroundPanel backgroundPanel = new BackgroundPanel();
        backgroundPanel.setLayout(new GridBagLayout());
        GridBagConstraints gbc = new GridBagConstraints();
        gbc.insets = new Insets(10, 10, 10, 10);
        gbc.fill = GridBagConstraints.HORIZONTAL;
        gbc.anchor = GridBagConstraints.WEST;

        // Create text fields with blue text
        txtType = new JTextField();
        txtTitle = new JTextField();
        txtSpecifications = new JTextField();
        setTextFieldProperties(txtType);
        setTextFieldProperties(txtTitle);
        setTextFieldProperties(txtSpecifications);

        // Create buttons
        JButton btnAdd = new JButton("Add Game");
        JButton btnDelete = new JButton("Delete Game");
        JButton btnDisplay = new JButton("Display Games");
        JButton btnSearch = new JButton("Search Games");

        // Set buttons' foreground color to blue
        setButtonProperties(btnAdd);
        setButtonProperties(btnDelete);
        setButtonProperties(btnDisplay);
        setButtonProperties(btnSearch);

        // Add action listeners for buttons
        btnAdd.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                addGame();
            }
        });

        btnDelete.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                deleteGame();
            }
        });

        btnDisplay.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                displayGamesInNewWindow();
            }
        });

        btnSearch.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                openSearchWindow();
            }
        });

        // Add components to backgroundPanel
        gbc.gridx = 0;
        gbc.gridy = 0;
        backgroundPanel.add(new JLabel("Type of Game:"), gbc);
        gbc.gridx = 1;
        backgroundPanel.add(txtType, gbc);
        gbc.gridx = 2;
        backgroundPanel.add(btnAdd, gbc);

        gbc.gridx = 0;
        gbc.gridy = 1;
        backgroundPanel.add(new JLabel("Title of Game:"), gbc);
        gbc.gridx = 1;
        backgroundPanel.add(txtTitle, gbc);
        gbc.gridx = 2;
        backgroundPanel.add(btnDelete, gbc);

        gbc.gridx = 0;
        gbc.gridy = 2;
        backgroundPanel.add(new JLabel("Specifications:"), gbc);
        gbc.gridx = 1;
        backgroundPanel.add(txtSpecifications, gbc);
        gbc.gridx = 2;
        backgroundPanel.add(btnDisplay, gbc);

        gbc.gridx = 2;
        gbc.gridy = 3;
        gbc.gridheight = 2;
        backgroundPanel.add(btnSearch, gbc);

        // Add components to frame
        add(backgroundPanel, BorderLayout.CENTER);

        // Load games from file
        loadGames();
    }

    private void setTextFieldProperties(JTextField textField) {
        textField.setPreferredSize(new Dimension(200, 30));
        textField.setForeground(Color.BLUE); // Set text color to blue
    }

    private void setButtonProperties(JButton button) {
        button.setForeground(Color.BLUE); // Set button text color to blue
    }

    private void addGame() {
        String type = txtType.getText().trim();
        String title = txtTitle.getText().trim();
        String specifications = txtSpecifications.getText().trim();

        if (type.isEmpty() || title.isEmpty() || specifications.isEmpty()) {
            JOptionPane.showMessageDialog(this, "Please fill all fields", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        games.add(new Game(type, title, specifications));
        txtType.setText("");
        txtTitle.setText("");
        txtSpecifications.setText("");
        JOptionPane.showMessageDialog(this, "Game added successfully");

        // Save games to file
        saveGames();
    }

    private void deleteGame() {
        String title = txtTitle.getText().trim();

        if (title.isEmpty()) {
            JOptionPane.showMessageDialog(this, "Please enter the title of the game to delete", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        Game toRemove = null;
        for (Game game : games) {
            if (game.getTitle().equalsIgnoreCase(title)) {
                toRemove = game;
                break;
            }
        }

        if (toRemove != null) {
            games.remove(toRemove);
            txtTitle.setText("");
            JOptionPane.showMessageDialog(this, "Game deleted successfully");

            // Save games to file
            saveGames();
        } else {
            JOptionPane.showMessageDialog(this, "Game not found", "Error", JOptionPane.ERROR_MESSAGE);
        }
    }

    private void displayGamesInNewWindow() {
        // Create a new frame to display the games
        JFrame displayFrame = new JFrame("List of Games");
        displayFrame.setSize(600, 400);
        displayFrame.setLocationRelativeTo(this);
        displayFrame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        // Create a text area to display the list of games with larger font and black text
        JTextArea txtDisplay = new JTextArea();
        txtDisplay.setEditable(false);
        txtDisplay.setForeground(Color.BLACK); // Set text color to black
        txtDisplay.setFont(new Font("Arial", Font.PLAIN, 16)); // Set font size to 16
        JScrollPane scrollPane = new JScrollPane(txtDisplay);
        displayFrame.add(scrollPane);

        // Populate the text area with the list of games
        StringBuilder sb = new StringBuilder();
        for (Game game : games) {
            sb.append("Type: ").append(game.getType()).append("\n");
            sb.append("Title: ").append(game.getTitle()).append("\n");
            sb.append("Specifications: ").append(game.getSpecifications()).append("\n");
            sb.append("--------------------\n");
        }
        txtDisplay.setText(sb.toString());

        // Show the new frame
        displayFrame.setVisible(true);
    }

    private void openSearchWindow() {
        // Create a new frame for searching games with background image
        JFrame searchFrame = new JFrame("Search Games");
        searchFrame.setSize(600, 400);
        searchFrame.setLocationRelativeTo(this);
        searchFrame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        // Create a BackgroundPanel for search window
        BackgroundPanel searchPanel = new BackgroundPanel("C:\\Users\\cheta\\IdeaProjects\\GameGUI\\SearchGames.jpg");
        searchPanel.setLayout(new GridBagLayout());
        GridBagConstraints gbc = new GridBagConstraints();
        gbc.insets = new Insets(10, 10, 10, 10);
        gbc.fill = GridBagConstraints.HORIZONTAL;

        // Create search fields and button
        JTextField txtSearchName = new JTextField();
        JTextField txtSearchType = new JTextField();
        JTextField txtSearchSpecs = new JTextField();
        setTextFieldProperties(txtSearchName);
        setTextFieldProperties(txtSearchType);
        setTextFieldProperties(txtSearchSpecs);

        JButton btnSearch = new JButton("Search");
        btnSearch.setForeground(Color.BLUE); // Set button text color to blue

        // Add action listener for search button
        btnSearch.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                performSearch(txtSearchName.getText().trim(), txtSearchType.getText().trim(), txtSearchSpecs.getText().trim());
            }
        });

        // Add components to searchPanel
        gbc.gridx = 0;
        gbc.gridy = 0;
        searchPanel.add(new JLabel("Search by Name:"), gbc);
        gbc.gridx = 1;
        searchPanel.add(txtSearchName, gbc);

        gbc.gridx = 0;
        gbc.gridy = 1;
        searchPanel.add(new JLabel("Search by Type:"), gbc);
        gbc.gridx = 1;
        searchPanel.add(txtSearchType, gbc);

        gbc.gridx = 0;
        gbc.gridy = 2;
        searchPanel.add(new JLabel("Search by Specs:"), gbc);
        gbc.gridx = 1;
        searchPanel.add(txtSearchSpecs, gbc);

        gbc.gridx = 1;
        gbc.gridy = 3;
        searchPanel.add(btnSearch, gbc);

        // Add the searchPanel to the searchFrame
        searchFrame.add(searchPanel);

        // Show the search frame
        searchFrame.setVisible(true);
    }

    private void performSearch(String name, String type, String specs) {
        List<Game> filteredGames = games.stream()
                .filter(game -> (name.isEmpty() || game.getTitle().toLowerCase().contains(name.toLowerCase())) &&
                        (type.isEmpty() || game.getType().toLowerCase().contains(type.toLowerCase())) &&
                        (specs.isEmpty() || game.getSpecifications().toLowerCase().contains(specs.toLowerCase())))
                .collect(Collectors.toList());

        // Create a new frame to display the search results
        JFrame resultsFrame = new JFrame("Search Results");
        resultsFrame.setSize(600, 400);
        resultsFrame.setLocationRelativeTo(this);
        resultsFrame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        // Create a text area to display the search results with larger font and black text
        JTextArea txtResults = new JTextArea();
        txtResults.setEditable(false);
        txtResults.setForeground(Color.BLACK); // Set text color to black
        txtResults.setFont(new Font("Arial", Font.PLAIN, 16)); // Set font size to 16
        JScrollPane scrollPane = new JScrollPane(txtResults);
        resultsFrame.add(scrollPane);

        // Populate the text area with the filtered list of games
        StringBuilder sb = new StringBuilder();
        if (filteredGames.isEmpty()) {
            sb.append("No games found matching the search criteria.");
        } else {
            for (Game game : filteredGames) {
                sb.append("Type: ").append(game.getType()).append("\n");
                sb.append("Title: ").append(game.getTitle()).append("\n");
                sb.append("Specifications: ").append(game.getSpecifications()).append("\n");
                sb.append("--------------------\n");
            }
        }
        txtResults.setText(sb.toString());

        // Show the results frame
        resultsFrame.setVisible(true);
    }

    private void saveGames() {
        try (ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(FILE_NAME))) {
            oos.writeObject(games);
        } catch (IOException e) {
            JOptionPane.showMessageDialog(this, "Error saving games: " + e.getMessage(), "Error", JOptionPane.ERROR_MESSAGE);
        }
    }

    private void loadGames() {
        File file = new File(FILE_NAME);
        if (file.exists()) {
            try (ObjectInputStream ois = new ObjectInputStream(new FileInputStream(FILE_NAME))) {
                games = (List<Game>) ois.readObject();
            } catch (IOException | ClassNotFoundException e) {
                JOptionPane.showMessageDialog(this, "Error loading games: " + e.getMessage(), "Error", JOptionPane.ERROR_MESSAGE);
            }
        }
    }

    private static class Game implements Serializable {
        private static final long serialVersionUID = 1L;
        private String type;
        private String title;
        private String specifications;

        public Game(String type, String title, String specifications) {
            this.type = type;
            this.title = title;
            this.specifications = specifications;
        }

        public String getType() {
            return type;
        }

        public String getTitle() {
            return title;
        }

        public String getSpecifications() {
            return specifications;
        }
    }

    private class BackgroundPanel extends JPanel {
        private Image backgroundImage;

        public BackgroundPanel() {
            try {
                // Load the background image for main frame
                backgroundImage = new ImageIcon("C:\\Users\\cheta\\IdeaProjects\\GameGUI\\GamingBackground.jpg").getImage();
            } catch (Exception e) {
                e.printStackTrace();
            }
        }

        public BackgroundPanel(String imagePath) {
            try {
                // Load the background image for search frame
                backgroundImage = new ImageIcon(imagePath).getImage();
            } catch (Exception e) {
                e.printStackTrace();
            }
        }

        @Override
        protected void paintComponent(Graphics g) {
            super.paintComponent(g);
            // Draw the background image
            if (backgroundImage != null) {
                g.drawImage(backgroundImage, 0, 0, getWidth(), getHeight(), this);
            }
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            GameManager manager = new GameManager();
            manager.setVisible(true);
        });
    }
}