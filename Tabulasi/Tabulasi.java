import java.lang.Math;
import java.text.DecimalFormat;
class Tabulasi{
	public static void main(String[] args) {
		double x =0, fx, tambah = 1, asli = 0.56714329, ea, er ;
		Tabulasi t = new Tabulasi();
		DecimalFormat s = new DecimalFormat("0.00");
		for(int i=0; i<3;i++){
			tambah = tambah/10;
			fx = t.fungsi(x);
			System.out.println("x\t|\t(FX)\t\tEa\t\tEr");
			while(fx>0){
				ea = asli - x;
				System.out.println(fx);
				System.out.println(asli+"-"+x+ "= "+ea);
				er = ea/asli*100;
				System.out.println(ea+"/"+x+" *"+"100 ="+ er);
				System.out.println(t.p2d(x)+"\t|\t"+t.p2d(fx)+"\t\t"+t.p2d(ea)+"\t\t"+s.format(er)+"%");
				x += tambah;
				fx = t.fungsi(x);
				System.out.println();
			}
			System.out.println("\n");
			x= x-tambah;
		}
		
	}
	public double fungsi(double x){
		return Math.exp(-x)-x;
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.#####");
		return df.format(x);
		
	}
}