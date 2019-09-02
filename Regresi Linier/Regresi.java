import java.lang.Math;
import java.text.DecimalFormat;
import java.util.Scanner;
class Regresi{
	public static void main(String[] args) {
		int[][] data= new int[100][2];
		int batas;
		String namadata;
		double totX = 0, totY = 0, totXY = 0, totX2 = 0, pembilang, penyebut, M, rataY, rataX, C, X, Y;
		Scanner scan = new Scanner(System.in);
		Regresi b = new Regresi();
		System.out.print("Masukkan banyak data yang diinput  =");
		batas = scan.nextInt();
		System.out.println("Masukkan Data =");
		for(int i=0;i<batas;i++){
			for(int j=0;j<2;j++){
				if(j==0){
					namadata = "Minggu Ke = ";
				}else{
					namadata = "Harga Pasar = ";
				}
			 System.out.print(namadata) ;			
			 data[i][j] =  scan.nextInt();
			}
		}
		
		for(int i = 0;i<batas;i++){
			totX=data[i][0]+totX;
			totY=data[i][1]+totY;
			totXY=data[i][0]*data[i][1]+totXY;
			totX2=data[i][0]*data[i][0]+totX2;
		}

		pembilang = (batas*totXY)-(totX*totY);
		penyebut = batas*totX2-totX*totX;
		M = pembilang/penyebut;

		rataX = totX/batas;
		rataY = totY/batas;
		C = rataY - M*rataX;
		System.out.print("Masukkan Minggu yang ingin di cari     = ");
		X = scan.nextDouble();
		Y = M*X+C;
		System.out.print("Masukkan Minggu yang ingin di cari     = "+b.p2d(Y) );
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.####");
		return df.format(x);
	}
}