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
import java.util.List;
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
    
    public List<Integer> getAllDestinations() {
        List<Integer> list = new ArrayList<Integer>();
        try {
            String requetee = "SELECT prix FROM Voyage";
            PreparedStatement pst = cnx.prepareStatement(requetee);
            ResultSet rs = pst.executeQuery();
            System.out.println(rs.toString());

            while (rs.next()) {
                list.add(rs.getInt("prix"));
            }

            return list;
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return list;
    }
     public void add(Guide g) {
        try {     
            int id = 0;
            
            String requete = "SELECT id FROM Voyage WHERE prix=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, g.getVoyage_id());
            ResultSet rs = pst.executeQuery();
                        
            if(rs.next())
            {
                id = rs.getInt(1);
            }
            
            
            String req="INSERT INTO Guide(voyage_id,nom,prenom,email,num_tel) "
                    + "VALUES(?,?,?,?,?)";
            PreparedStatement pstt = cnx.prepareStatement(req);
            
            pstt.setInt(1, id);
            pstt.setString(2, g.getNom());
            pstt.setString(3, g.getPrenom());
            pstt.setString(4, g.getEmail());
            pstt.setInt(5, g.getNum_tel());
            
              System.out.println("77");
            
            System.out.println(rs.getInt(1));
            System.out.println(g.getNom());
            System.out.println(g.getPrenom());
            System.out.println(g.getEmail());
            System.out.println(g.getNum_tel());
            
            pstt.executeUpdate();
            /*
            if (SystemTray.isSupported()) {
                TrayIconDemo td = new TrayIconDemo();
                try {
                    td.trayAjout();
                } catch (AWTException ex) {
                    Logger.getLogger(UserCRUD.class.getName()).log(Level.SEVERE, null, ex);
                }
            } else {
                System.err.println("System tray not supported!");
            }
            */
            
            System.out.println("User ajouté !");
        } catch (SQLException ex) {
            if (ex.getMessage().contains("Duplicata")) {
                System.out.println("User existe deja!");
            } else {
                System.out.println(ex.getMessage());
            }
        }
    }
     
     
  

    /*@Override
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
        }        }*/

     
     
     
      public void updateGuide(int id, String nom){
   
        try {
           
            String requete = "UPDATE Guide SET nom=? where id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
           
            pst.setString(1, nom);
            pst.setInt(2,id);
        
            pst.executeUpdate();
            System.out.println("Modification effectuée!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
   
    }
      
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

    /*@Override
    public void update(Guide voy) {

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
    }*/

    

    

   

  

    
   
}
