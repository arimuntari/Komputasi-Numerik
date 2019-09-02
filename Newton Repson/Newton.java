import java.lang.Math;
import java.text.DecimalFormat;
class Newton{
	public static void main(String[] args) {
		double x0 =0,  fx0, fx1, x3,  asli=0.56714329, ea, er, ee, sm;
		Newton b = new Newton();
		DecimalFormat s = new DecimalFormat("0.00");
		for(int i=1; i<=3; i++){
			fx0 = b.fungsi(x0);
			fx1 = b.fungsi1(x0);
			x3 = x0 -((fx0)/(fx1));
			er = (x3-asli)/asli* 100;
			System.out.println("X"+i+" = "+x3 );
			System.out.println("Er = "+s.format(Math.abs(er)) );
		
			x0 = x3;
			System.out.println("\n\n");
		}
	}
	public double fungsi(double x){
		return Math.exp(-x)-x;
	}
	public double fungsi1(double x){
		return -Math.exp(-x)-1;
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.####");
		return df.format(x);
	}
}