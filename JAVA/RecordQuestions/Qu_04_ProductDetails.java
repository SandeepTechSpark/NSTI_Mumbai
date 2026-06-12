import java.util.Scanner;
 class Product{
     String productCode, productName;
     int quantity;
     double price, totalPrice;
 

public Product(String productCode, String productName, int quantity, double price) {
    this.productCode = productCode;
    this.productName = productName;
    this.quantity = quantity;
    this.price = price;
    this.totalPrice = quantity*price;
}
 public void displayDetails() {
     System.out.printf("%-15s %-20s %-10s %-10s %-10s\n", 
     productCode,productName, quantity, price, totalPrice);
 }
}
public class Qu_04_ProductDetails {
    public static void main(String[] args) {
        Scanner scanner = new Scanner (System.in);
        System.out.print("Enter the number of products : ");
        int n = scanner.nextInt();
        scanner.nextLine();
        
        Product[] products = new Product[n];
        
        for(int i=0; i<n; i++) {
            System.out.println("Enter details for Product " + (i+1) + " : ");
            
            
            System.out.print("Enter Product Code : ");
            String code = scanner.nextLine();
            
            System.out.print("Enter Product Name : ");
            String name = scanner.nextLine();
            
            System.out.print("Enter Quantity : ");
            int quantity = scanner.nextInt();
            
            System.out.print("Enter Price per Unit : ");
            double price = scanner.nextDouble();
            
           scanner.nextLine();
            
            products[i] = new Product(code, name, quantity, price);
            System.out.println();
        }
        System.out.println("---------------------------- Product Details -------------------------\n");
        System.out.printf("%-15s %-20s %-10s %-10s %-10s\n","Product Code","Product Name","Quantity","Price","TotalPrice");
        System.out.print("");
        
        for(int i=0; i<n; i++) {
            products[i].displayDetails();
        }
        scanner.close();
    }
}