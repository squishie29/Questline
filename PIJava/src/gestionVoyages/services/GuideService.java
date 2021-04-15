/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestionVoyages.services;

import gestionVoyages.entities.Guide;
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
public class GuideService implements IService<Guide>{
      Connection cnx = MaConnexion.getInstance().getCnx();


    @Override
    public ObservableList<Guide> getAll() {
        
         ObservableList<Guide> guides = FXCollections.observableArrayList();
        String req = "SELECT * FROM Guide inner join Voyage on Guide.voyage_id=Voyage.id";
        try {
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Guide g = new Guide ();
                
                g.setId(rst.getInt("id"));
                g.setVoyage_id(rst.getInt("voyage_id"));
                g.setNom(rst.getString("nom"));
                g.setPrenom(rst.getString("prenom"));
                g.setEmail(rst.getString("email"));
                g.setNum_tel(rst.getInt("num_tel"));
                guides.add(g);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(GuideService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return (guides);
    }
    

    @Override
    public void add(Guide voy) {
 try {
            String req="INSERT INTO Guide(voyage_id,nom,prenom,email,num_tel) "
                    + "VALUES(?,?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(req);
            
            pst.setInt(1, voy.getVoyage_id());
            pst.setString(2, voy.getNom());
            pst.setString(3, voy.getPrenom());
            pst.setString(4, voy.getEmail());
            pst.setInt(5, voy.getNum_tel());
            
            pst.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(GuideService.class.getName()).log(Level.SEVERE, null, ex);
        }        }

    @Override
    public void delete(Guide voy) {
 
        PreparedStatement ps;
        try {
            ps = cnx.prepareStatement("delete from Guide where id = ?");
           
            ps.setInt(1,voy.getId());
            ps.execute();
            
        } catch (Exception e) {
            Logger.getLogger(GuideService.class.getName()).log(Level.SEVERE, null, e);
        }    }

    @Override
    public boolean update(Guide voy , int id) {

        PreparedStatement pst;
        try {
            pst = cnx.prepareStatement("update Guide set voyage_id=?, nom=?, prenom=?, email=?, num_tel=?  where id = ?");
            
            pst.setInt(1, voy.getVoyage_id());
            pst.setString(2, voy.getNom());
            pst.setString(3, voy.getPrenom());
            pst.setString(4, voy.getEmail());
            pst.setInt(5, voy.getNum_tel());
            
        } catch (Exception e) {
            Logger.getLogger(VoyageService.class.getName()).log(Level.SEVERE, null, e);
        }    
        return true;
    }
    
   
}
