/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestionVoyages.services;

import gestionVoyages.entities.Voyage;
import gestionVoyages.interfaces.IService;
import gestionVoyages.utils.MaConnexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.chart.PieChart;

/**
 *
 * @author acer
 */
public class VoyageService implements IService<Voyage>{
      Connection cnx = MaConnexion.getInstance().getCnx();
    

    @Override
    public void add(Voyage voy) {
 try {
            String req="INSERT INTO Voyage(destination,prix,periode,image_name) "
                    + "VALUES(?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(req);
            pst.setString(1, voy.getDestination());
            pst.setInt(2, voy.getPrix());
            pst.setString(3, voy.getPeriode());
            pst.setString(4, voy.getImage_name());
            
            pst.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, ex);
        }    
    }
    
    /*@Override
    public void update(int id, String t){
   
        try {
           
            String requete = "UPDATE type_reclamation SET type_reclamation=? where id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
           
            pst.setString(1, t);
            pst.setInt(2,id);
        
            pst.executeUpdate();
            System.out.println("Type modifié !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
   
    }*/
    
 
    public void updateVoyage(int id, String destination){
   
        try {
           
            String requete = "UPDATE Voyage SET destination=? where id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
           
            pst.setString(1, destination);
            pst.setInt(2,id);
        
            pst.executeUpdate();
            System.out.println("Modification effectuée!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
   
    }
    
     @Override
        
    public void delete(Voyage voy) {
       
           
        PreparedStatement ps;
        try {
            ps = cnx.prepareStatement("delete from Voyage where id = ?");
           
            ps.setInt(1,voy.getId());
            ps.execute();
            
        } catch (Exception e) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, e);
        }
    }


    @Override
    public ObservableList<Voyage> getAll() {
        
         ObservableList<Voyage> voyages = FXCollections.observableArrayList();
        String req = "SELECT * FROM Voyage";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Voyage v = new Voyage();
                v.setId(rst.getInt("id"));
                v.setDestination(rst.getString("destination"));
                v.setPrix(rst.getInt("prix"));
                v.setPeriode(rst.getString("periode"));
                v.setImage_name(rst.getString("image_name"));
                voyages.add(v);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (voyages);
    }

    /*@Override
    public void search(Voyage v) {
        int id = 0;
        
        try{
            
            String requete = "SELECT * FROM Voyage WHERE id= ?";
            
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, v.getId());
            ResultSet rs = pst.executeQuery();
                        
            if(rs.next())
            {
                id = rs.getInt(1);
            }
            
            }
            
            catch (SQLException ex) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, ex);
        }
            
    }*/
    
    
    public ObservableList<Voyage> trier() {
        
         ObservableList<Voyage> voyages = FXCollections.observableArrayList();
        String req = "SELECT * FROM Voyage order by prix";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Voyage v = new Voyage();
                v.setId(rst.getInt("id"));
                v.setDestination(rst.getString("destination"));
                v.setPrix(rst.getInt("prix"));
                v.setPeriode(rst.getString("periode"));
                v.setImage_name(rst.getString("image_name"));
                voyages.add(v);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (voyages);
    }

    
}