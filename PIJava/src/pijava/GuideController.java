/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pijava;

import gestionVoyages.entities.Guide;
import gestionVoyages.entities.Voyage;
import gestionVoyages.services.GuideService;
import gestionVoyages.services.VoyageService;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author acer
 */
public class GuideController implements Initializable {

    @FXML
    private Label lbvoy;
    @FXML
    private Label lbnom;
    @FXML
    private Label lbprenom;
    @FXML
    private Label lbnum;
    @FXML
    private TextField tfvoy;
    @FXML
    private TextField tfnom;
    @FXML
    private TextField tfprenom;
    @FXML
    private TextField tfemail;
    @FXML
    private TextField tfnum;
    @FXML
    private TableView<Guide> tview;
    @FXML
    private TableColumn<Guide, Integer> colvoy;
    @FXML
    private TableColumn<Guide, String> colnom;
    @FXML
    private TableColumn<Guide, String> colemail;
    @FXML
    private TableColumn<Guide, Integer> colnum;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private Button btnShow;
    @FXML
    private TableColumn<Guide, Integer> colid;
    @FXML
    private TableColumn<Guide, String> colprénom;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }  
    
    
    @FXML
    private void showGuides() {
        
         ObservableList<Guide> GuideList = (ObservableList<Guide>) new GuideService().getAll();
        
        
         colid.setCellValueFactory(new PropertyValueFactory<Guide, Integer>("id"));
         colvoy.setCellValueFactory(new PropertyValueFactory<Guide, Integer>("voyage_id"));
         colnom.setCellValueFactory(new PropertyValueFactory<Guide, String>("nom"));
         colprénom.setCellValueFactory(new PropertyValueFactory<Guide, String>("prenom"));
         colemail.setCellValueFactory(new PropertyValueFactory<Guide, String>("email"));
         colnum.setCellValueFactory(new PropertyValueFactory<Guide, Integer>("num_tel"));
         
         tview.setItems(GuideList);
                 
    }

    @FXML
    private void InsertButton(ActionEvent event) {
        
        Guide g = new  Guide();
            
            g.setVoyage_id(Integer.parseInt(tfvoy.getText()));
            g.setNom(tfnom.getText());
            g.setPrenom(tfprenom.getText());
            g.setEmail(tfemail.getText());
            g.setNum_tel(Integer.parseInt(tfnum.getText()));
            
            new GuideService().add(g);
            tfvoy.setText("");
            tfnom.setText("");
            tfprenom.setText("");
            tfemail.setText("");
            tfnum.setText("");
            
            showGuides();
         
          
          JOptionPane.showMessageDialog(null,"Ajout effectué");
            
    }

    @FXML
    private void UpdateButton(ActionEvent event) {
    }

    @FXML
    private void DeleteButton(ActionEvent event) {
        
        Guide g = tview.getSelectionModel().getSelectedItem();
        GuideService guide =  new GuideService();
        guide.delete(g);
        
         showGuides();
         
       
        JOptionPane.showMessageDialog(null,"Voulez-vous vraiment supprimer ?");
    }

    
    
}
