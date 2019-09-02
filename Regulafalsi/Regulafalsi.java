import java.lang.Math;
import java.text.DecimalFormat;
class Regulafalsi{
	public static void main(String[] args) {
		double x1 =0, x2=1, x3, fx1, fx2, fx3, er, asli=0.56714329;
		Regulafalsi r = new Regulafalsi();
		DecimalFormat s = new DecimalFormat("0.00");
		for(int i=1; i<=5; i++){
			fx1 = r.fungsi(x1);
			fx2 = r.fungsi(x2);
			System.out.println("Literasi = "+(i));
			x3 = x2 - (fx2*(x1-x2))/(fx1-fx2);
			System.out.println(""+x2+" - ("+fx2+"*("+x1+"-"+x2+"))/("+fx1+"-"+fx2);
			fx3 = r.fungsi(x3);
			er = (x3-asli)/asli*100;
			System.out.println("Literasi = "+(i));
			System.out.println("X1= "+(x1));
			System.out.println("X2= "+(x2));
			System.out.println("X3= "+(x3));
			System.out.println("FX1= "+(fx1));
			System.out.println("FX2= "+(fx2));
			System.out.println("FX3= "+(fx3));
			System.out.println("ER= "+s.format(er));
			System.out.println("\n");
			if(fx1*fx1 < fx2*fx2){
				x1 = x3;
			}else{
				x2 = x3;
			}
			System.out.println();
		}
	}
	public double fungsi(double x){
		return Math.exp(-x)-x;
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.######");
		return df.format(x);
	}
}