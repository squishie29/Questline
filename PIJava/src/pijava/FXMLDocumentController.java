/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pijava;

import java.sql.Connection;
import gestionVoyages.entities.Voyage;
import gestionVoyages.services.VoyageService;
import gestionVoyages.utils.MaConnexion;
import java.awt.Desktop.Action;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author acer
 */
public class FXMLDocumentController implements Initializable {

    @FXML
    private Label lbdest;
    @FXML
    private Label lbprix;
    @FXML
    private Label lbperiode;
    @FXML
    private TextField tfdest;
    @FXML
    private TextField tfprix;
    @FXML
    private TextField tfperiode;
    @FXML
    private TableView<Voyage> tview;
    @FXML
    private TableColumn<Voyage, Integer> colprix;
    @FXML
    private TableColumn<Voyage, String> colperiode;
    @FXML
    private Button btnInsert;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private Button btnShow;
    @FXML
    private TableColumn<Voyage, Integer> colid;
    @FXML
    private TableColumn<Voyage, String> coldestination;
    @FXML
    private Label lbimage;
    @FXML
    private TextField tfimage;
    @FXML
    private TableColumn<Voyage, String> colimage;
    @FXML
    private TextField tfid;
    @FXML
    private Label lbid;
    
   
    
    public void initialize(URL url, ResourceBundle rb) {
        
    }    
    
  
    @FXML
    public void showVoyages()
    {
       
        
         ObservableList<Voyage> VoyageList = (ObservableList<Voyage>) new VoyageService().getAll();
        
         colid.setCellValueFactory(new PropertyValueFactory<Voyage, Integer>("id"));
         coldestination.setCellValueFactory(new PropertyValueFactory<Voyage, String>("destination"));
         colprix.setCellValueFactory(new PropertyValueFactory<Voyage, Integer>("prix"));
         colperiode.setCellValueFactory(new PropertyValueFactory<Voyage, String>("periode"));
         colimage.setCellValueFactory(new PropertyValueFactory<Voyage, String>("image_name"));
         
         tview.setItems(VoyageList);
                 
   }

    @FXML
    private void insertButton(ActionEvent event) {
         
            Voyage v = new  Voyage();
            
            v.setDestination(tfdest.getText());
            v.setPrix((Integer.parseInt(tfprix.getText())));
            v.setPeriode(tfperiode.getText());
            v.setImage_name(tfimage.getText());
           
            new VoyageService().add(v);
            tfdest.setText("");
            tfprix.setText("");
            tfperiode.setText("");
            tfimage.setText("");
            
          showVoyages();
          
          JOptionPane.showMessageDialog(null,"Ajout effectué");
            
    }

    @FXML
    private void updateButton(ActionEvent event) {
        
           
             tview.setEditable(true);
                
            Voyage v = new  Voyage();
            
            v.setDestination(tfdest.getText());
            v.setPrix((Integer.parseInt(tfprix.getText())));
            v.setPeriode(tfperiode.getText());
            v.setImage_name(tfimage.getText());
            
            VoyageService voy =  new VoyageService(); 
            voy.update(v);
            tfdest.setText("");
            tfprix.setText("");
            tfperiode.setText("");
            tfimage.setText("");
          
            
            showVoyages();
           
    }
    
   
    

    @FXML
    private void deleteButton(ActionEvent event) {
        
         Voyage v = tview.getSelectionModel().getSelectedItem();
         VoyageService voy =  new VoyageService();
         voy.delete(v);
         
        showVoyages();
       
        JOptionPane.showMessageDialog(null,"Voulez-vous vraiment supprimer ?");
    }

    @FXML
    private void getSelected(MouseEvent event) {
        
        Voyage v = tview.getSelectionModel().getSelectedItem();
          
            tfdest.setText(coldestination.getCellData(v).toString());
            tfprix.setText(colprix.getCellData(v).toString());
            tfperiode.setText(colperiode.getCellData(v).toString());
            tfimage.setText(colimage.getCellData(v).toString());
            
           
            
    }
    

    

  
   

    }
