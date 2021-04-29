/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestionVoyages.interfaces;

import gestionVoyages.entities.Voyage;
import java.sql.SQLException;
import java.util.ArrayList;
import javafx.collections.ObservableList;

/**
 *
 * @author bhk
 */
public interface IService <T>{
    public void add(T voy);
    
    public ObservableList<T> getAll();
    
    public void delete(T voy);
    
   
    
}
