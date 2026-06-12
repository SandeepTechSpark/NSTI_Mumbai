import java.util.Scanner;

public class Qu_05_MatrixAddition {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter the Row Limit for Matrix A : ");
        int m = sc.nextInt();
        System.out.print("Enter the Column Limit for Matrix A : ");
        int n = sc.nextInt();

        System.out.print("Enter the Row Limit for Matrix B : ");
        int p = sc.nextInt();
        System.out.print("Enter the Column Limit for Matrix B : ");
        int q = sc.nextInt();
        
        System.out.print("\n\n\n");

        if(m == p && n == q) {
            int[][] a = new int[m][n];
            int[][] b = new int[p][q];
            int[][] c = new int[m][n];
            
            System.out.print("Enter the Elements for Matrix A : \n");
            int k=01;
            for(int i = 0; i < m; i++) {
                for(int j = 0; j < n; j++){
                    System.out.printf("Enter Element %d : ",k++);
                    a[i][j] = sc.nextInt();
                }
            }
            
            System.out.print("\n\nEnter the Elements for Matrix B : \n");
            int s=01;
            for(int i = 0; i < p; i++) {
                for(int j = 0; j < q; j++){
                    System.out.printf("Enter Element %d : ",s++);
                    b[i][j] = sc.nextInt();
                }
            }

            for(int i = 0; i < m; i++){
                for(int j = 0; j < n; j++){
                    c[i][j] = a[i][j] + b[i][j];
                }
            }

            System.out.println("First Matrix (A) : ");
            printMatrix(a);
            System.out.println("Second Matrix (B) : ");
            printMatrix(b);
            System.out.println("Addition Resultant Matrix (C) : ");
            printMatrix(c);
        } else {
            System.out.println("Addition is not possible. Matrix Dimensions do not match.");
        }
        sc.close();
    }
    
    public static void printMatrix(int [][] matrix) {
        for(int[] row : matrix) {
            for (int element : row) {
                System.out.print(element + " ");
            } 
            System.out.println();
        }
    }
}
