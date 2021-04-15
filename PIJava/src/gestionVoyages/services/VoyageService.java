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
    
    @Override
    public boolean update(Voyage v, int id) throws SQLException {
    
    String sql = "UPDATE voyage SET destination=?, prix=?, periode=? WHERE id=?";

        PreparedStatement pst = cnx.prepareStatement(sql);
        
            pst.setString(1, v.getDestination());
            pst.setInt(2, v.getPrix());
            pst.setString(3, v.getPeriode());
            pst.setString(4, v.getImage_name());
       

        int rowsUpdated = pst.executeUpdate();
        
        if (rowsUpdated > 0) {
            System.out.println("An existing User was updated successfully!");
        }
        return true;
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
    
   
}
