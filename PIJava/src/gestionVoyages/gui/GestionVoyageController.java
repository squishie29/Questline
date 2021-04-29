/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestionVoyages.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;

/**
 * FXML Controller class
 *
 * @author acer
 */
public class GestionVoyageController implements Initializable {

    @FXML
    private Label lbDestination;
    @FXML
    private Label lbPrix;
    @FXML
    private TableView<?> tvVoyages;
    @FXML
    private TableColumn<?, ?> colDestination;
    @FXML
    private TableColumn<?, ?> colPrix;
    @FXML
    private TableColumn<?, ?> colPeriode;
    @FXML
    private Button btInsert;
    @FXML
    private Button btUpdate;
    @FXML
    private Button btDelete;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void handleButtonAction(ActionEvent event) {
    }
    
}
